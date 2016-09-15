<?php

namespace SellerLabs\Research\Responses;

use SellerLabs\Nucleus\Meditation\Arguments;
use SellerLabs\Nucleus\Meditation\Boa;
use SellerLabs\Nucleus\Meditation\Exceptions\InvalidArgumentException;
use SellerLabs\Research\Entities\Offer;
use SellerLabs\Research\Enum\OfferCondition;
use SellerLabs\Research\Enum\OfferType;

/**
 * Class OffersResponse
 *
 * Represents an offers call response from NodeMWS
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Responses
 */
class OffersResponse extends BaseResponse
{
    /**
     * Used FBA offers
     *
     * @var Offer[]
     */
    protected $fbaUsedOffers = [];

    /**
     * New FBA offers
     *
     * @var Offer[]
     */
    protected $fbaNewOffers = [];

    /**
     * Used merchant offers
     *
     * @var Offer[]
     */
    protected $merchantUsedOffers = [];

    /**
     * New merchant offers
     *
     * @var Offer[]
     */
    protected $merchantNewOffers = [];

    /**
     * Product Id type
     *
     * (usually just 'asin')
     *
     * @var string
     */
    protected $productIdType = 'unknown';

    /**
     * Product id code
     *
     * @var string
     */
    protected $productIdCode = 'unknown';

    /**
     * All extra properties provided in the response
     *
     * @var array
     */
    protected $extras = [];

    /**
     * Add a offer to the response.
     *
     * @param string $type
     * @param string $condition
     * @param Offer $offer
     *
     * @throws InvalidArgumentException
     */
    public function addOffer($type, $condition, Offer $offer)
    {
        Arguments::contain(
            Boa::in(OfferType::getValues()),
            Boa::in(OfferCondition::getValues()),
            Boa::instance(Offer::class)
        )->check($type, $condition, $offer);

        if ($type === OfferType::TYPE_FBA) {
            if ($condition === OfferCondition::CONDITION_NEW) {
                $this->fbaNewOffers[] = $offer;
            } elseif ($condition === OfferCondition::CONDITION_USED) {
                $this->fbaUsedOffers[] = $offer;
            }
        } elseif ($type === OfferType::TYPE_MERCHANT_FULFILLED) {
            if ($condition === OfferCondition::CONDITION_NEW) {
                $this->merchantNewOffers[] = $offer;
            } elseif ($condition === OfferCondition::CONDITION_USED) {
                $this->merchantUsedOffers[] = $offer;
            }
        }
    }

    /**
     * Get new FBA offers
     *
     * @return Offer[]
     */
    public function getFbaNewOffers()
    {
        return $this->fbaNewOffers;
    }

    /**
     * Get used FBA offers
     *
     * @return Offer[]
     */
    public function getFbaUsedOffers()
    {
        return $this->fbaUsedOffers;
    }

    /**
     * Get new merchant offers
     *
     * @return Offer[]
     */
    public function getMerchantNewOffers()
    {
        return $this->merchantNewOffers;
    }

    /**
     * Get used merchant offers
     *
     * @return Offer[]
     */
    public function getMerchantUsedOffers()
    {
        return $this->merchantUsedOffers;
    }

    /**
     * Get the product id
     *
     * (most likely an ASIN or ISBN)
     *
     * @return string
     */
    public function getProductIdCode()
    {
        return $this->productIdCode;
    }

    /**
     * @param string $productIdCode
     */
    public function setProductIdCode($productIdCode)
    {
        $this->productIdCode = $productIdCode;
    }

    /**
     * Get the product id type
     *
     * Usually just 'asin'
     *
     * @return string
     */
    public function getProductIdType()
    {
        return $this->productIdType;
    }

    /**
     * @param string $productIdType
     */
    public function setProductIdType($productIdType)
    {
        $this->productIdType = $productIdType;
    }

    /**
     * Get an array of all extras
     *
     * @return array
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param array $extras
     */
    public function setExtras($extras)
    {
        $this->extras = $extras;
    }

    /**
     * Get a single extra
     *
     * @param string $key
     *
     * @return mixed
     */
    public function getExtra($key)
    {
        return $this->extras[$key];
    }

    /**
     * Check if the EAN is provided in the extra properties
     *
     * @return bool
     */
    public function hasEanIdType()
    {
        return $this->hasExtra('ean') && !empty($this->extras['ean']);
    }

    /**
     * Check whether there is an extra defined with the specified key
     *
     * @param string $key
     *
     * @return bool
     */
    public function hasExtra($key)
    {
        return array_key_exists($key, $this->extras);
    }

    /**
     * Check if the UPC is provided in the extra properties
     *
     * @return bool
     */
    public function hasUpcIdType()
    {
        return $this->hasExtra('upc') && !empty($this->extras['upc']);
    }
}
