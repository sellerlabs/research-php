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

/**
 * Class ItemSearchResponse
 *
 * @package SellerLabs\Research\Responses
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 */
class ItemSearchResponse extends BaseResponse
{
    /**
     * @var array
     */
    protected $items;

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
}
