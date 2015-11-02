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

use SellerLabs\Research\Entities\SearchOffer;

/**
 * Class SearchOfferFactory
 *
 * @package SellerLabs\Research\Factories
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 */
class SearchOfferFactory extends BaseEntityFactory
{
    /**
     * Build an entity from an properties array.
     *
     * @param array $input
     *
     * @return SearchOffer[]
     */
    public function makeFromArray(array $input)
    {
        return array_map(function ($offer) {
            return new SearchOffer($offer);
        }, $input);
    }
}
