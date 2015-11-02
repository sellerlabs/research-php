<?php

/**
 * Copyright 2014-2015, SellerLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Snagshout package
 */

namespace SellerLabs\Research\Factories;

use SellerLabs\Research\Entities\BaseEntity;

/**
 * Class ItemLinksFactory
 *
 * @package SellerLabs\Research\Factories
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 */
class ItemLinksFactory extends BaseEntityFactory
{
    /**
     * @var ItemLink[]
     */
    public $links;

    /**
     * Build an entity from an properties array.
     *
     * @param array $input
     *
     * @return ItemLink[]
     */
    public function makeFromArray(array $input)
    {
        return  array_map(function ($item) {
            return new ItemLink($item);
        }, $input);
    }
}
