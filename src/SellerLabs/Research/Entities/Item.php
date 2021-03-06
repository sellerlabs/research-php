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

use SellerLabs\Research\Factories\ItemLink;
use SellerLabs\Research\Factories\ItemLinksFactory;
use SellerLabs\Research\Factories\SearchOfferFactory;

/**
 * Class Item
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Entities
 */
class Item extends BaseEntity
{
    /**
     * @var string
     */
    public $asin;

    /**
     * @var string
     */
    public $detailPageUrl;

    /**
     * @var ItemLink[]
     */
    public $itemLinks;

    /**
     * @var ItemAttributes
     */
    public $itemAttributes;

    /**
     * @var OfferSummary
     */
    public $offerSummary;

    /**
     * @var SearchOffer[]
     */
    public $offers;

    /**
     * Item constructor.
     *
     * @param array $raw
     */
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

    /**
     * @param array $itemLinks
     *
     * @return array
     */
    protected function parseItemLinks($itemLinks)
    {
        return array_map(function ($item) {
            return new ItemLink($item);
        }, $itemLinks);
    }

    /**
     * @param array $itemAttributes
     *
     * @return ItemAttributes
     */
    protected function parseItemAttributes($itemAttributes)
    {
        return new ItemAttributes($itemAttributes);
    }

    /**
     * @param array $offerSummary
     *
     * @return OfferSummary
     */
    protected function parseOfferSummary($offerSummary)
    {
        return new OfferSummary($offerSummary);
    }

    /**
     * @param array $offers
     *
     * @return array
     */
    protected function parseOffers(array $offers)
    {
        // Normalize in case of non-list, which can happen due to XML->JSON
        // conversion (NB. this checks if $offers is a sequential array)
        if (array_values($offers) !== $offers) {
            $offers = [$offers];
        }

        return array_map(function ($offer) {
            return new SearchOffer($offer);
        }, $offers);
    }
}
