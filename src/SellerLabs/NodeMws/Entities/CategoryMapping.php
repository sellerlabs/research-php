<?php

namespace SellerLabs\NodeMws\Entities;

use stdClass;

/**
 * Class CategoryMapping
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\NodeMws\Entities
 */
class CategoryMapping
{
    /**
     * @var bool
     */
    protected $mainCategory;

    /**
     * @var string
     */
    protected $categoryId;

    /**
     * @var string
     */
    protected $category;

    /**
     * Construct an instance of a CategoryMapping
     *
     * @param \stdClass $json
     */
    public function __construct(stdClass $json)
    {
        if (property_exists($json, 'main')) {
            $this->mainCategory = $json->main;
        } else {
            $this->mainCategory = false;
        }

        if (property_exists($json, 'categoryId')) {
            $this->categoryId = $json->categoryId;
        }

        if (property_exists($json, 'category')) {
            $this->category = $json->category;
        }
    }

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
     * Get the ID of a category
     *
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
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
}
