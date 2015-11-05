<?php

namespace SellerLabs\Research\Factories;

use Chromabits\Nucleus\Support\Arr;
use SellerLabs\Research\Entities\CategoryMapping;

/**
 * Class CategoryMappingFactory
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @package SellerLabs\Research\Factories
 */
class CategoryMappingFactory extends BaseEntityFactory
{
    /**
     * Build an entity from an properties array.
     *
     * @param array $input
     *
     * @return CategoryMapping
     */
    public function makeFromArray(array $input)
    {
        $mapping = new CategoryMapping();

        if (Arr::has($input, 'main')) {
            $mapping->setMainCategory($input['main']);
        }

        if (Arr::has($input, 'categoryId')) {
            $mapping->setCategoryId($input['categoryId']);
        }

        if (Arr::has($input, 'category')) {
            $mapping->setCategory($input['category']);
        }

        return $mapping;
    }
}
