<?php

namespace SellerLabs\NodeMws\Responses;

use GuzzleHttp\Message\ResponseInterface;
use SellerLabs\NodeMws\Entities\CategoryMapping;
use SellerLabs\NodeMws\Exceptions\InvalidFormatException;

/**
 * Class GetAsinCategoriesResponse
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\NodeMws\Responses
 */
class GetAsinCategoriesResponse
{
    /**
     * Raw JSON response
     *
     * @var mixed
     */
    protected $jsonResponse;

    /**
     * Category mappings
     *
     * @var CategoryMapping[]
     */
    protected $categoryMappings;

    /**
     * Main category
     *
     * @var CategoryMapping
     */
    protected $mainCategory;

    /**
     * Create a GetAsinCategoriesResponse from a raw getAsinCategories response
     * from ModernMws
     *
     * @param ResponseInterface $response
     *
     * @throws InvalidFormatException
     */
    public function __construct(ResponseInterface $response)
    {
        // Parse the JSON into an stdClass object
        $rawResponse = json_decode($response->getBody());

        // Check that the categoryMappings object is present
        if (!property_exists($rawResponse, 'categoryMappings')) {
            throw new InvalidFormatException;
        }

        $this->jsonResponse = $rawResponse;

        $this->parseCategoryMappings();
    }

    /**
     * Parse the raw response into a list of category mappings and save them
     */
    protected function parseCategoryMappings()
    {
        $this->categoryMappings = [];

        foreach ($this->jsonResponse->categoryMappings as $categoryMapping) {
            $mapping = new CategoryMapping($categoryMapping);

            // Set the main category for the Asin Categories response
            if ($mapping->isMainCategory()) {
                $this->mainCategory = $mapping;
            }

            $this->categoryMappings[] = $mapping;
        }
    }

    /**
     * Get all category mappings contained in response
     *
     * @return mixed
     */
    public function getCategoryMappings()
    {
        return $this->categoryMappings;
    }

    /**
     * Get the main category from the response
     *
     * @return mixed
     */
    public function getMainCategory()
    {
        return $this->mainCategory;
    }
}
