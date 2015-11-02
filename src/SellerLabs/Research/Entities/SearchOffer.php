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
 * Class SearchOffer
 *
 * @package SellerLabs\Research\Entities
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 */
class SearchOffer extends BaseEntity
{
    public $merchant;
    public $offerAttributes;
    public $offerListing;

    public function __construct(array $raw)
    {
        parent::__construct($raw);

        $this->merchant = new Merchant($this->get('Merchant', []));
        $this->offerAttributes = new ItemAttributes(
            $this->get('OfferAttributes')
        );
        $this->offerListing = new OfferListing(
            $this->get('OfferListing', [])
        );

        var_dump($this);
        // TODO
    }
}
