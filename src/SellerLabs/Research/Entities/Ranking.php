<?php

/**
 * Copyright 2014-2015, SellerLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Snagshout package
 */

namespace SellerLabs\Research\Entities;

/**
 * Class Ranking
 *
 * @package SellerLabs\Research\Entities
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 */
class Ranking
{
    /**
     * @var string
     */
    protected $categoryId;

    /**
     * @var int
     */
    protected $rank;

    /**
     * Construct a Ranking from an array element
     *
     * @param array $raw
     */
    public function __construct(array $raw)
    {
        if (isset ($raw['ProductCategoryId'])) {
            $this->categoryId = $raw['ProductCategoryId'];
        }

        if ($raw['Rank']) {
            $this->rank = $raw['Rank'];
        }
    }

    /**
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }
}
