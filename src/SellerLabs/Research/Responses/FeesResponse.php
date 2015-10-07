<?php

namespace SellerLabs\Research\Responses;

use SellerLabs\Research\Entities\FeesSet;

/**
 * Class FeesResponse
 *
 * Represents a fees call response from NodeMWS
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\Research\Responses
 */
class FeesResponse extends BaseResponse
{
    /**
     * @var string
     */
    protected $sizeTier = 'unknown';

    /**
     * @var FeesSet
     */
    protected $merchantFees = null;

    /**
     * @var FeesSet
     */
    protected $fbaFees = null;

    /**
     * Get FBA fees
     *
     * @return null|FeesSet
     */
    public function getFbaFees()
    {
        return $this->fbaFees;
    }

    /**
     * @param FeesSet $fbaFees
     */
    public function setFbaFees($fbaFees)
    {
        $this->fbaFees = $fbaFees;
    }

    /**
     * Get merchant-fulfilled fees
     *
     * @return null|FeesSet
     */
    public function getMerchantFees()
    {
        return $this->merchantFees;
    }

    /**
     * @param FeesSet $merchantFees
     */
    public function setMerchantFees($merchantFees)
    {
        $this->merchantFees = $merchantFees;
    }

    /**
     * Get product size tier
     *
     * @return string
     */
    public function getSizeTier()
    {
        return $this->sizeTier;
    }

    /**
     * @param string $sizeTier
     */
    public function setSizeTier($sizeTier)
    {
        $this->sizeTier = $sizeTier;
    }
}
