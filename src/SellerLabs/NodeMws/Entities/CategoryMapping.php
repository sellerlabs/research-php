<?php

namespace SellerLabs\NodeMws\Entities;

use stdClass;

class CategoryMapping {

    protected $mainCategory;
    protected $categoryId;
    protected $category;

    public function __construct(stdClass $parsedJsonCategoryMapping)
    {
        if (property_exists($parsedJsonCategoryMapping, 'main')) {
            $this->mainCategory = $parsedJsonCategoryMapping->main;
        } else {
            $this->mainCategory = false;
        }

        if (property_exists($parsedJsonCategoryMapping, 'categoryId')) {
            $this->categoryId = $parsedJsonCategoryMapping->categoryId;
        }

        if (property_exists($parsedJsonCategoryMapping, 'category')) {
            $this->category = $parsedJsonCategoryMapping->category;
        }
    }

    /**
     * @return bool
     */
    public function isMainCategory()
    {
        return $this->mainCategory;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

}