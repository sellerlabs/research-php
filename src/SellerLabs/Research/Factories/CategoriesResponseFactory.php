<?php

namespace SellerLabs\Research\Factories;

use Chromabits\Nucleus\Support\Arr;
use Chromabits\Nucleus\Support\Std;
use Psr\Http\Message\ResponseInterface;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\Responses\BaseResponse;
use SellerLabs\Research\Responses\GetAsinCategoriesResponse;

/**
 * Class CategoriesResponseFactory
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\Research\Factories
 */
class CategoriesResponseFactory extends BaseResponseFactory
{
    /**
     * Parse and build a rich response object from an HTTP response.
     *
     * @param ResponseInterface $response
     *
     * @return GetAsinCategoriesResponse
     * @throws InvalidFormatException
     */
    public function makeFromResponse(ResponseInterface $response)
    {
        $body = $this->parse($response);

        $this->assertIsSuccessful($body);

        $categoriesResponse = new GetAsinCategoriesResponse();

        $categoriesResponse->setInnerResponse($response);
        $this->parseMappings($categoriesResponse, $body);

        return $categoriesResponse;
    }

    /**
     * Assert that the response is valid and successful.
     *
     * @param array $body
     *
     * @throws InvalidFormatException
     */
    protected function assertIsSuccessful(array $body)
    {
        if (!Arr::has($body, 'categoryMappings')) {
            throw new InvalidFormatException(
                'The `categoryMappings` property is missing from the response.'
            );
        }
    }

    /**
     * Parse category mappings.
     *
     * @param GetAsinCategoriesResponse $categoriesResponse
     * @param array $body
     */
    protected function parseMappings(
        GetAsinCategoriesResponse $categoriesResponse,
        array $body
    ) {
        $factory = new CategoryMappingFactory();

        $categoriesResponse->setCategoryMappings(Std::map(
            function ($rawMapping) use ($factory, $categoriesResponse) {
                $mapping = $factory->makeFromArray($rawMapping);

                if ($mapping->isMainCategory()) {
                    $categoriesResponse->setMainCategory($mapping);
                }

                return $mapping;
            },
            $body['categoryMappings']
        ));
    }
}