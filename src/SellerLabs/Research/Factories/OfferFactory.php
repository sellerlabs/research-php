<?php

namespace SellerLabs\Research\Factories;

use SellerLabs\Research\Entities\Offer;

/**
 * Class OfferFactory
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\Research\Factories
 */
class OfferFactory extends BaseEntityFactory
{
    /**
     * Build an Offer from an properties array.
     *
     * @param array $input
     *
     * @return Offer
     */
    public function makeFromArray(array $input)
    {
        $offer = new Offer();

        $offer->setCondition($input['cond']);
        $offer->setSubcondition($input['subcond']);
        $offer->setFulfillmentCenter($input['fc']);
        $offer->setShipdom($input['shipdom']);
        $offer->setShipmax($input['shipmax']);
        $offer->setRating($input['rating']);
        $offer->setNumber((int) $input['number']);
        $offer->setFeedbackCount((int) $input['fbcount']);
        $offer->setMulti($input['multi']);
        $offer->setPrice((double) $input['price']);
        $offer->setPriceShipping((double) $input['priceShipping']);
        $offer->setPriceLanded((double) $input['priceLanded']);

        return $offer;
    }
}