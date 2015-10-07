<?php

namespace SellerLabs\Research\Entities;

/**
 * Class CategoryMapping
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Entities
 */
class CategoryMapping extends BaseEntity
{
    /**
     * @var bool
     */
    protected $mainCategory = false;

    /**
     * @var string
     */
    protected $categoryId;

    /**
     * @var string
     */
    protected $category;

    /**
     * Return whether or not the category is a main category
     *
     * @return bool
     */
    public function isMainCategory()
    {
        return $this->mainCategory;
    }

    /**
     * @param boolean $mainCategory
     */
    public function setMainCategory($mainCategory)
    {
        $this->mainCategory = $mainCategory;
    }

    /**
     * Get the ID of a category
     *
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param string $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * Get the category name
     *
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
}
