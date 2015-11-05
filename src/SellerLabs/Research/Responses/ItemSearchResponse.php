<?php

/**
 * Copyright 2014-2015, SellerLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Snagshout package
 */

namespace SellerLabs\Research\Responses;

use SellerLabs\Research\Entities\Item;

/**
 * Class ItemSearchResponse
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Responses
 */
class ItemSearchResponse extends BaseResponse
{
    /**
     * @var Item[]
     */
    protected $items;

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
}
