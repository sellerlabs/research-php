<?php

namespace SellerLabs\Research\Factories;

use Psr\Http\Message\ResponseInterface;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\Responses\GetCategoryByIdResponse;

/**
 * Class CategoryResponseFactory
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @package SellerLabs\Research\Factories
 */
class CategoryResponseFactory extends BaseResponseFactory
{
    /**
     * Parse and build a rich response object from an HTTP response.
     *
     * @param ResponseInterface $response
     *
     * @return GetCategoryByIdResponse
     * @throws InvalidFormatException
     */
    public function makeFromResponse(ResponseInterface $response)
    {
        $body = $this->parse($response);
        $factory = new CategoryMappingFactory();

        $categoryResponse = new GetCategoryByIdResponse();

        $categoryResponse->setInnerResponse($response);
        $categoryResponse->setCategoryMapping($factory->makeFromArray(
            $body
        ));

        return $categoryResponse;
    }
}
