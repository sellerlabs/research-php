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
 * Class OfferListing
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Entities
 */
class OfferListing extends BaseEntity
{
    /**
     * @var Price
     */
    public $salePrice;

    /**
     * @var Price
     */
    public $amountSaved;

    /**
     * @var int
     */
    public $percentageSaved;

    /**
     * @var string
     */
    public $availability;

    /**
     * @var AvailabilityAttributes
     */
    public $availabilityAttributes;

    /**
     * @var bool
     */
    public $isEligibleForSuperSaverShipping;

    /**
     * @var bool
     */
    public $isEligibleForPrime;

    /**
     * OfferListing constructor.
     *
     * @param array $raw
     */
    public function __construct(array $raw = [])
    {
        parent::__construct($raw);

        $this->salePrice = new Price(
            $this->get('SalePrice', [])
        );
        $this->amountSaved = new Price(
            $this->get('AmountSaved', [])
        );
        $this->percentageSaved = (int) $this->get('PercentageSaved', 0);
        $this->availability = $this->get('Availability');
        $this->availabilityAttributes = new AvailabilityAttributes(
            $this->get('AvailabilityAttributes')
        );
        $this->isEligibleForSuperSaverShipping = $this->get(
            'IsEligibleForSuperSaverShipping'
        ) != '0';
        $this->isEligibleForPrime = $this->get(
            'IsEligibleForPrime'
        ) != '0';
    }
}
