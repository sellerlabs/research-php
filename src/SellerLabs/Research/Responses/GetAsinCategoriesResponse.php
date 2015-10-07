<?php

namespace SellerLabs\Research\Responses;

use SellerLabs\Research\Entities\CategoryMapping;

/**
 * Class GetAsinCategoriesResponse
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Responses
 */
class GetAsinCategoriesResponse extends BaseResponse
{
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
     * Get all category mappings contained in response
     *
     * @return mixed
     */
    public function getCategoryMappings()
    {
        return $this->categoryMappings;
    }

    /**
     * @param CategoryMapping[] $categoryMappings
     */
    public function setCategoryMappings($categoryMappings)
    {
        $this->categoryMappings = $categoryMappings;
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

    /**
     * @param CategoryMapping $mainCategory
     */
    public function setMainCategory($mainCategory)
    {
        $this->mainCategory = $mainCategory;
    }
}
