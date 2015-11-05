<?php

namespace SellerLabs\Research;

use Chromabits\Nucleus\Meditation\Arguments;
use Chromabits\Nucleus\Meditation\Boa;
use Chromabits\Nucleus\Support\Std;
use GuzzleHttp\Client as GuzzleClient;
use SellerLabs\Research\Enum\CodeType;
use SellerLabs\Research\Factories\CategoriesResponseFactory;
use SellerLabs\Research\Factories\CategoryResponseFactory;
use SellerLabs\Research\Factories\FeesResponseFactory;
use SellerLabs\Research\Factories\ItemSearchResponseFactory;
use SellerLabs\Research\Factories\OffersResponseFactory;
use SellerLabs\Research\Factories\SearchResponseFactory;
use SellerLabs\Research\Interfaces\ResearchClientInterface;
use SellerLabs\Research\Responses\FeesResponse;
use SellerLabs\Research\Responses\GetAsinCategoriesResponse;
use SellerLabs\Research\Responses\GetCategoryByIdResponse;
use SellerLabs\Research\Responses\ItemSearchResponse;
use SellerLabs\Research\Responses\OffersResponse;
use SellerLabs\Research\Responses\SearchResponse;

/**
 * Class ResearchClient
 *
 * An implementation of a client capable of querying the SellerLabs Research
 * API.
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research
 */
class ResearchClient implements ResearchClientInterface
{
    /**
     * Internal HTTP Client
     *
     * @var GuzzleClient
     */
    protected $client;

    /**
     * Endpoint (Base URL) where the research API is available
     *
     * @var string
     */
    protected $endpoint;

    /**
     * Client ID for API authentication
     *
     * @var string
     */
    protected $clientId;

    /**
     * Client secret for API authentication
     *
     * @var string
     */
    protected $secret;

    /**
     * Overrides the internal guzzle client.
     *
     * Mainly used for testing.
     *
     * @param GuzzleClient $client
     */
    public function setClient(GuzzleClient $client)
    {
        $this->client = $client;
    }

    /**
     * Construct an instance of a ResearchClient
     *
     * @param string $clientId
     * @param string $secret
     * @param string $endpoint
     */
    public function __construct($clientId, $secret, $endpoint)
    {
        Arguments::contain(Boa::string(), Boa::string(), Boa::string())
            ->check($clientId, $secret, $endpoint);

        // Copy configuration to internal variables
        $this->clientId = $clientId;
        $this->secret = $secret;
        $this->endpoint = $endpoint;
        $this->client = new GuzzleClient([
            'base_uri' => $endpoint,
            'headers' => [
                'Authorization' => $this->generateCode(),
            ],
        ]);
    }

    /**
     * Generate an authorization code for the Research API server.
     *
     * @param null|integer $timestamp
     *
     * @return string
     */
    public function generateCode($timestamp = null)
    {
        Arguments::contain(Boa::either(Boa::null(), Boa::integer()))
            ->check($timestamp);

        $timestamp = Std::coalesce($timestamp, time() + 3600 * 3);

        $signature = md5(implode('', [
            $timestamp,
            $this->clientId,
            $this->secret,
        ]));

        return vsprintf('%s|%s|%s', [
            $timestamp,
            $this->clientId,
            $signature,
        ]);
    }

    /**
     * Get the current offers for an ASIN from the Research API.
     *
     * @param string $asin
     * @param bool $noPaapi
     *
     * @return OffersResponse
     */
    public function getOffers($asin, $noPaapi = false)
    {
        Arguments::contain(Boa::string(), Boa::boolean())
            ->check($asin, $noPaapi);

        $query = [
            'format' => 'pretty',
        ];

        if ($noPaapi) {
            $query['nopaapi'] = true;
        }

        return (new OffersResponseFactory())->makeFromResponse(
            $this->client->get(
                vsprintf('/v1/offers/%s', [$asin]),
                ['query' => $query]
            )
        );
    }

    /**
     * Call the fees endpoint of the Research API and return the response.
     *
     * @param string $asin
     * @param float $price
     *
     * @return FeesResponse
     */
    public function getFees($asin, $price)
    {
        Arguments::contain(Boa::string(), Boa::float())
            ->check($asin, $price);

        return (new FeesResponseFactory())->makeFromResponse(
            $this->client->get(
                vsprintf('/v1/fees/%s', [$asin]),
                [
                    'query' => [
                        'price' => $price,
                    ],
                ]
            )
        );
    }

    /**
     * Search the catalog and return the response
     *
     * @param string $idType
     * @param string $idCode
     *
     * @return SearchResponse
     */
    public function getSearch($idType, $idCode)
    {
        Arguments::contain(Boa::in(CodeType::getValues()), Boa::string())
            ->check($idType, $idCode);

        return (new SearchResponseFactory())->makeFromResponse(
            $this->client->get(
                '/v1/search',
                [
                    'query' => [
                        $idType => $idCode,
                        'format' => 'pretty',
                    ],
                ]
            )
        );
    }

    /**
     * Get categories for an ASIN
     *
     * @param string $asin
     *
     * @return GetAsinCategoriesResponse
     */
    public function getAsinCategories($asin)
    {
        Arguments::contain(Boa::string())->check($asin);

        return (new CategoriesResponseFactory())->makeFromResponse(
            $this->client->get(
                vsprintf('/v1/getAsinCategories/%s', [$asin])
            )
        );
    }

    /**
     * Get a category by ID
     *
     * @param string $categoryId
     *
     * @return GetCategoryByIdResponse
     */
    public function getCategoryById($categoryId)
    {
        Arguments::contain(Boa::string())->check($categoryId);

        return (new CategoryResponseFactory())->makeFromResponse(
            $this->client->get(
                vsprintf('/v1/getCategoryById/%s', [$categoryId])
            )
        );
    }

    /**
     * Hit the itemSearch endpoint of research-api with a given keyword
     * phrase, page (default 1) and search index (default Blended)
     *
     * @param string $keywords
     * @param int $page
     * @param string $searchIndex
     *
     * @return ItemSearchResponse
     */
    public function getItemSearch(
        $keywords,
        $page = 1,
        $searchIndex = 'Blended'
    ) {
        return (new ItemSearchResponseFactory())->makeFromResponse(
            $this->client->get(
                '/v1/itemSearch',
                [
                    'query' => [
                        'keywords' => $keywords,
                        'page' => $page,
                        'searchIndex' => $searchIndex,
                    ],
                ]
            )
        );
    }
}
