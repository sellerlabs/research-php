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

use SellerLabs\Research\Factories\ItemLinksFactory;
use SellerLabs\Research\Factories\SearchOfferFactory;

/**
 * Class Item
 *
 * @package SellerLabs\Research\Entities
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 */
class Item extends BaseEntity
{
    public $asin;
    public $detailPageUrl;
    public $itemLinks;
    public $itemAttributes;
    public $offerSummary;
    public $offers;

    public function __construct(array $raw)
    {
        parent::__construct($raw);

        $this->asin = $this->get('ASIN');
        $this->detailPageUrl = $this->get('DetailPageURL');
        $this->itemLinks = $this->parseItemLinks(
            $this->get('ItemLinks.ItemLink', [])
        );
        $this->itemAttributes = $this->parseItemAttributes(
            $this->get('ItemAttributes', [])
        );

        $this->offerSummary = $this->parseOfferSummary(
            $this->get('OfferSummary', [])
        );

        $this->offers = $this->parseOffers($this->get('Offers.Offer', []));
    }

    protected function parseItemLinks($itemLinks)
    {
        return (new ItemLinksFactory())->makeFromArray($itemLinks);
    }

    protected function parseItemAttributes($itemAttributes)
    {
        return new ItemAttributes($itemAttributes);
    }

    protected function parseOfferSummary($offerSummary)
    {
        return new OfferSummary($offerSummary);
    }

    protected function parseOffers(array $offers)
    {
        // Normalize in case of non-list, which can happen due to XML->JSON
        // conversion
        if (!isset($offers[0])) {
            $offers = [$offers];
        }

        return (new SearchOfferFactory())->makeFromArray($offers);
    }
}
