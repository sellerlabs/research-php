<?php

namespace SellerLabs\Research\Responses;

use SellerLabs\Research\Entities\CategoryMapping;

/**
 * Class GetCategoryByIdResponse
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Responses
 */
class GetCategoryByIdResponse extends BaseResponse
{
    /**
     * Category mapping
     *
     * @var CategoryMapping
     */
    protected $categoryMapping;

    /**
     * Get the category id associated with this response
     *
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->getCategoryMapping()->getCategoryId();
    }

    /**
     * Get the category mapping returned
     *
     * @return mixed
     */
    public function getCategoryMapping()
    {
        return $this->categoryMapping;
    }

    /**
     * @param CategoryMapping $categoryMapping
     */
    public function setCategoryMapping($categoryMapping)
    {
        $this->categoryMapping = $categoryMapping;
    }

    /**
     * Get the category associated with this response
     *
     * @return mixed
     */
    public function getCategory()
    {
        return $this->getCategoryMapping()->getCategory();
    }
}
