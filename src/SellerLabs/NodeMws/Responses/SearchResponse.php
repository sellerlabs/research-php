<?php

namespace SellerLabs\NodeMws\Responses;

use GuzzleHttp\Message\ResponseInterface;
use SellerLabs\NodeMws\Entities\SearchProduct;
use SellerLabs\NodeMws\Exceptions\EmptyResultsException;
use SellerLabs\NodeMws\Exceptions\InvalidFormatException;
use stdClass;

/**
 * Class SearchResponse
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\NodeMws\Responses
 */
class SearchResponse
{
    /**
     * Hold the raw json response
     *
     * @var stdClass
     */
    protected $jsonResponse;

    /**
     * Hold each product returned from the search
     *
     * @var SearchProduct[]
     */
    protected $searchProducts;

    /**
     * Construct a search response from a Guzzle client response
     *
     * @param ResponseInterface $response
     *
     * @throws EmptyResultsException
     * @throws InvalidFormatException
     */
    public function __construct(ResponseInterface $response)
    {
        // Attempt to parse the JSON
        $rootResponse = json_decode($response->getBody());

        // Check for errors
        if (property_exists($rootResponse, 'Error')) {
            throw new EmptyResultsException(
                'Got error: ' . $rootResponse->Error
            );
        }

        // Check that the response is valid
        if (!property_exists($rootResponse, 'searchCatalogs')) {
            throw new InvalidFormatException();
        }

        // Store the JSON object internally
        $this->jsonResponse = $rootResponse;

        // Set products
        $this->searchProducts = [];
        foreach ($rootResponse->searchCatalogs->result as $product) {
            $this->searchProducts[] = new SearchProduct($product);
        }
    }

    /**
     * Get the search products from a NodeMws response.
     *
     * @return array|SearchProduct[]
     */
    public function getSearchProducts()
    {
        return $this->searchProducts;
    }

    /**
     * Check if a SearchResponse gives back no products.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->searchProducts);
    }

    /**
     * Return the first product returned from a search query.
     *
     * @return SearchProduct
     */
    public function first()
    {
        if (!empty($this->searchProducts)) {
            return $this->searchProducts[0];
        }

        return null;
    }
}
