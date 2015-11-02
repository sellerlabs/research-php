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
 * @package SellerLabs\Research\Entities
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 */
class OfferListing extends BaseEntity
{
    public $salePrice;
    public $amountSaved;
    public $percentageSaved;
    public $availablity;
    public $availabilityAttributes;
    public $isEligibleForSuperSaverShipping;
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
        $this->availablity = $this->get('Availability');
        $this->availabilityAttributes = new AvailabilityAttributes(
            $this->get('AvailabilityAttributes')
        );
        $this->isEligibleForSuperSaverShipping = $this->get(
            'IsEligibleForSuperSaverShipping'
        );
        $this->isEligibleForPrime = $this->get(
            'IsEligibleForPrime'
        );
    }
}
