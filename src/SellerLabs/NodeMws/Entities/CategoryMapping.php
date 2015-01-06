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

    public function isMainCategory()
    {
        return $this->mainCategory;
    }

}