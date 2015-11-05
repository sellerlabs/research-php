<?php

namespace SellerLabs\Research\Factories;

use Chromabits\Nucleus\Support\Arr;
use Chromabits\Nucleus\Support\Std;
use Psr\Http\Message\ResponseInterface;
use SellerLabs\Research\Exceptions\EmptyResultsException;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\Responses\BaseResponse;
use SellerLabs\Research\Responses\SearchResponse;

/**
 * Class SearchResponseFactory
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @package SellerLabs\Research\Factories
 */
class SearchResponseFactory extends BaseResponseFactory
{
    /**
     * Parse and build a rich response object from an HTTP response.
     *
     * @param ResponseInterface $response
     *
     * @return SearchResponse
     * @throws InvalidFormatException
     */
    public function makeFromResponse(ResponseInterface $response)
    {
        $body = $this->parse($response);

        $this->assertIsSuccessful($body);

        $searchResponse = new SearchResponse();

        $searchResponse->setInnerResponse($response);
        $this->parseProducts($searchResponse, $body);

        return $searchResponse;
    }

    /**
     * Make some assertions on whether this response is valid and successful.
     * Throws an exception if it's not.
     *
     * @param array $body
     *
     * @throws EmptyResultsException
     * @throws InvalidFormatException
     */
    protected function assertIsSuccessful(array $body)
    {
        if (Arr::has($body, 'Error')) {
            throw new EmptyResultsException(
                'Got error: ' . $body['Error']
            );
        }

        if (!Arr::has($body, 'searchCatalogs')) {
            throw new InvalidFormatException(
                'The `searchCatalogs` property is missing from the'
                . ' response.'
            );
        }
    }

    /**
     * Parse each product in the response and add it to the rich response.
     *
     * @param SearchResponse $searchResponse
     * @param array $body
     */
    protected function parseProducts(
        SearchResponse $searchResponse,
        array $body
    ) {
        $factory = new SearchProductFactory();

        $searchResponse->setSearchProducts(Std::map(
            function ($rawProduct) use ($factory) {
                return $factory->makeFromArray($rawProduct);
            },
            Arr::dotGet($body, 'searchCatalogs.result', [])
        ));
    }
}