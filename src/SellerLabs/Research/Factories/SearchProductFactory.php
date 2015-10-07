<?php

namespace SellerLabs\Research\Factories;

use Chromabits\Nucleus\Support\Arr;
use SellerLabs\Research\Entities\BaseEntity;
use SellerLabs\Research\Entities\SearchProduct;

/**
 * Class SearchProductFactory
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\Research\Factories
 */
class SearchProductFactory extends BaseEntityFactory
{
    /**
     * Build an entity from an properties array.
     *
     * @param array $input
     *
     * @return BaseEntity
     */
    public function makeFromArray(array $input)
    {
        $product = new SearchProduct();

        $product->setCatalog($input['catalog']);
        $product->setAsin($input['productId']);
        $product->setEan($input['ean']);
        $product->setName($input['title']);
        $product->setImageUrl($input['image']);
        $product->setType($input['type']);
        $product->setWeight($input['weight']);

        if (Arr::has($input, 'rank')) {
            $rank = $input['rank'];

            if (Arr::has($rank, 'Rank')) {
                $product->setRank($rank['Rank']);
            } else {
                $product->setRank(null);
            }

            if (Arr::has($rank, 'ProductCategoryId')) {
                $product->setCategoryId($rank['ProductCategoryId']);
            } else {
                $product->setCategoryId(null);
            }
        }

        return $product;
    }
}