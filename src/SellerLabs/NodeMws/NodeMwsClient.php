<?php

namespace SellerLabs\NodeMws;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Url;
use InvalidArgumentException;
use SellerLabs\NodeMws\Interfaces\NodeMwsClientInterface;
use SellerLabs\NodeMws\Responses\FeesResponse;
use SellerLabs\NodeMws\Responses\GetAsinCategoriesResponse;
use SellerLabs\NodeMws\Responses\GetCategoryByIdResponse;
use SellerLabs\NodeMws\Responses\OffersResponse;
use SellerLabs\NodeMws\Responses\SearchResponse;

/**
 * Class NodeMwsClient
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\NodeMws
 */
class NodeMwsClient implements NodeMwsClientInterface
{
    /**
     * HTTP Client
     *
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * Base URL for ModernMWS
     *
     * @var string
     */
    protected $endpoint;

    /**
     * Client ID for ModernMWS
     *
     * @var string
     */
    protected $clientId;

    /**
     * Client secret for ModernMWS
     *
     * @var string
     */
    protected $secret;

    /**
     * Constructor
     *
     * @param string $clientId
     * @param string $secret
     * @param string $baseUrl
     * @param null $client
     */
    public function __construct(
        $clientId = null,
        $secret = null,
        $baseUrl = null,
        $client = null
    ) {

        date_default_timezone_set('UTC');

        // Check that the necessary config is present
        if (is_null($clientId) || is_null($secret) || is_null($baseUrl)) {
            throw new InvalidArgumentException();
        }

        // Copy configuration to internal variables
        $this->clientId = $clientId;
        $this->secret = $secret;
        $this->endpoint = $baseUrl;

        // Create a GuzzleClient
        if ($client) {
            $this->client = $client;
        } else {
            $this->client = new GuzzleClient([
                'base_url' => $baseUrl
            ]);
        }

        $this->client->setDefaultOption(
            'headers/Authorization',
            $this->generateCode()
        );
    }

    /**
     * Generate an authorization code for NodeMWS
     *
     * @param null $timestamp
     *
     * @return string
     */
    public function generateCode($timestamp = null)
    {
        if (is_null($timestamp)) {
            $timestamp = time() + 3600 * 3; // Expires in 3 hours
        }

        $stringToSign = $timestamp . $this->clientId . $this->secret;
        $signature = md5($stringToSign);

        $code = "{$timestamp}|{$this->clientId}|{$signature}";

        return $code;
    }

    /**
     * Get the current offers for an ASIN from NodeMWS
     *
     * @param string $asin
     * @param bool $noPaapi
     *
     * @return \SellerLabs\NodeMws\Responses\OffersResponse
     */
    public function getOffers($asin, $noPaapi = false)
    {
        // The response parser expects the pretty format
        $url = Url::fromString('/v1/offers/' . $asin);

        $query = [
            'format' => 'pretty'
        ];

        if ($noPaapi) {
            $query['nopaapi'] = true;
        }

        $url->setQuery($query);

        return new OffersResponse($this->client->get($url));
    }

    /**
     * Call the fees endpoint of NodeMWS and return the response
     *
     * @param $asin
     * @param $price
     *
     * @return FeesResponse
     */
    public function getFees($asin, $price)
    {
        $url = Url::fromString('/v1/fees/' . $asin);

        $url->setQuery([
            'price' => $price
        ]);

        return new FeesResponse($this->client->get($url));
    }

    /**
     * Search the catalog and return the response
     *
     * @param $codeType
     * @param $code
     *
     * @return SearchResponse
     */
    public function getSearch($codeType, $code)
    {
        $url = Url::fromString('/v1/search');

        $url->setQuery([
            $codeType => $code,
            'format' => 'pretty'
        ]);

        return new SearchResponse($this->client->get($url));
    }

    /**
     * Get categories for an ASIN
     *
     * @param $asin
     *
     * @return \SellerLabs\NodeMws\Responses\GetAsinCategoriesResponse
     */
    public function getAsinCategories($asin)
    {
        return new GetAsinCategoriesResponse(
            $this->client->get('/v1/getAsinCategories/' . $asin)
        );
    }

    /**
     * Get a category by ID
     *
     * @param $categoryId
     *
     * @return \SellerLabs\NodeMws\Responses\GetCategoryByIdResponse
     */
    public function getCategoryById($categoryId)
    {
        return new GetCategoryByIdResponse(
            $this->client->get('/v1/getCategoryById/' . $categoryId)
        );
    }
}
