<?php

namespace SellerLabs\Research\Factories;

use Chromabits\Nucleus\Support\Arr;
use SellerLabs\Research\Entities\FeesSet;

/**
 * Class FeesSetFactory
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @package SellerLabs\Research\Factories
 */
class FeesSetFactory extends BaseEntityFactory
{
    /**
     * Build an entity from an properties array.
     *
     * @param array $input
     *
     * @return FeesSet
     */
    public function makeFromArray(array $input)
    {
        $set = new FeesSet();

        $set->setPrice((double) $input['price']);
        $set->setRevenue((double) $input['revenue']);
        $set->setAmazonCommission((double) $input['azComm']);
        $set->setAmazonVar((double) $input['azVar']);
        $set->setFeesTotal((double) $input['feesTotal']);
        $set->setNetIncome((double) $input['netIncome']);
        $set->setCategory($input['category']);

        if (Arr::has($input, 'fbaWeight')) {
            $set->setFbaWeight((double) $input['fbaWeight']);
        }

        if (Arr::has($input, 'fbaPick')) {
            $set->setFbaPick((double) $input['fbaPick']);
        }

        if (Arr::has($input, 'fbaOrder')) {
            $set->setFbaOrder((double) $input['fbaOrder']);
        }

        return $set;
    }
}
