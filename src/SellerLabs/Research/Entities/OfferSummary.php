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
 * Class OfferSummary
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Entities
 */
class OfferSummary extends BaseEntity
{
    /**
     * @var Price
     */
    public $lowestNewPrice;

    /**
     * @var int
     */
    public $totalNew;

    /**
     * @var int
     */
    public $totalUsed;

    /**
     * @var int
     */
    public $totalCollectible;

    /**
     * @var int
     */
    public $totalRefurbished;

    /**
     * @param array $raw
     */
    public function __construct(array $raw)
    {
        parent::__construct($raw);

        $this->lowestNewPrice = new Price($this->get('LowestNewPrice', []));
        $this->totalNew = (int) $this->get('TotalNew') ?: null;
        $this->totalUsed = (int) $this->get('TotalUsed') ?: null;
        $this->totalCollectible = (int) $this->get('TotalCollectible') ?: null;
        $this->totalRefurbished = (int) $this->get('TotalRefurbished') ?: null;
    }
}
