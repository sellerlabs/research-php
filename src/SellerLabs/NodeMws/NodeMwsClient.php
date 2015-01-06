<?php

namespace SellerLabs\NodeMws;

use GuzzleHttp\Client as GuzzleClient;
use InvalidArgumentException;
use SellerLabs\NodeMws\Interfaces\NodeMwsClientInterface;
use SellerLabs\NodeMws\Responses\FeesResponse;
use SellerLabs\NodeMws\Responses\OffersResponse;
use SellerLabs\NodeMws\Responses\SearchResponse;

/**
 * Class NodeMwsClient
 *
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
     * Base URL for nodemws
     *
     * @var string
     */
    protected $endpoint;

    /**
     * Client ID for nodemws
     *
     * @var string
     */
    protected $clientId;

    /**
     * Client secret for nodemws
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
     */
    public function __construct($clientId = null, $secret = null, $baseUrl = null)
    {
        // Check that the necessary config is present
        if (is_null($clientId) || is_null($secret) || is_null($baseUrl)) {
            throw new InvalidArgumentException();
        }

        // Copy configuration to internal variables
        $this->clientId = $clientId;
        $this->secret = $secret;
        $this->endpoint = $baseUrl;

        // Create a GuzzleClient
        $this->client = new GuzzleClient([
            'base_url' => $baseUrl
        ]);

        $this->client->setDefaultOption('headers/Authorization', $this->generateCode());
    }

    /**
     * Generate an authorization code for NodeMWS
     *
     * @return string
     */
    public function generateCode()
    {
        $timestamp = time() + 3600 * 3; // Expires in 3 hours
        $stringToSign = $timestamp . $this->clientId . $this->secret;
        $signature = md5($stringToSign);

        $code = "{$timestamp}|{$this->clientId}|{$signature}";

        return $code;
    }

    /**
     * Get the current offers for an ASIN from NodeMWS
     *
     * @param string $asin
     * @return OffersResponse
     */
    public function getOffers($asin, $nopaapi=false)
    {
        // The response parser expects the pretty format
        $format = 'pretty';
        $url = '/v1/offers/' . $asin . '?format=' . $format;
        
        if($nopaapi) {
            $url .= '&nopaapi=true';
        }

        return new OffersResponse($this->client->get($url));
    }

    /**
     * Call the fees endpoint of NodeMWS and return the response
     *
     * @param $asin
     * @param $price
     * @return FeesResponse
     */
    public function getFees($asin, $price)
    {
        return new FeesResponse($this->client->get('/v1/fees/' . $asin . '?price=' . $price));
    }

    /**
     * Search the catalog and return the response
     *
     * @param $codeType
     * @param $code
     * @return SearchResponse
     */
    public function getSearch($codeType, $code)
    {
        return new SearchResponse(
            $this->client->get('/v1/search?' . $codeType . '=' . $code . '&format=pretty')
        );
    }
}
