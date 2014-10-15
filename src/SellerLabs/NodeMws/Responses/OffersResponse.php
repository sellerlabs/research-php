<?php

namespace SellerLabs\NodeMws\Responses;

use GuzzleHttp\Message\ResponseInterface;
use SellerLabs\NodeMws\Entities\Offer;
use SellerLabs\NodeMws\Exceptions\InvalidFormatException;
use stdClass;

/**
 * Class OffersResponse
 *
 * Represents an offers call response from NodeMWS
 *
 * @package SellerLabs\NodeMws\Responses
 */
class OffersResponse
{
    /**
     * Stores the raw stdClass from json_decode of the response
     *
     * @var stdClass
     */
    protected $jsonResponse;

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
     * Construct an offer response from a Guzzle client response
     *
     * @param ResponseInterface $response
     * @throws InvalidFormatException
     */
    public function __construct(ResponseInterface $response)
    {
        // Attempt to parse the JSON
        $rootResponse = json_decode($response->getBody());

        // Check that there is an offers object
        if (!property_exists($rootResponse, 'offers')) {
            throw new InvalidFormatException();
        }

        // Set the internal response object
        $this->jsonResponse = $rootResponse;

        // Parse ids
        $this->parseIds();

        // Parse offers
        $this->parseOffers();

        // Parse extras
        $this->parseExtras();
    }

    /**
     * Parse product ids from the response
     */
    protected function parseIds()
    {
        if (property_exists($this->jsonResponse, 'type')) {
            $this->productIdType = $this->jsonResponse->type;
        }

        if (property_exists($this->jsonResponse, 'id')) {
            $this->productIdCode = $this->jsonResponse->id;
        }
    }

    /**
     * Parse every kind of offer into offer entity classes
     */
    protected function parseOffers()
    {
        if (property_exists($this->jsonResponse->offers, 'fbaNew')) {
            foreach ($this->jsonResponse->offers->fbaNew as $fbaNewOffer) {
                $this->fbaNewOffers[] = new Offer($fbaNewOffer);
            }
        }

        if (property_exists($this->jsonResponse->offers, 'fbaUsed')) {
            foreach ($this->jsonResponse->offers->fbaUsed as $fbaUsedOffer) {
                $this->fbaUsedOffers[] = new Offer($fbaUsedOffer);
            }
        }

        if (property_exists($this->jsonResponse->offers, 'merchantNew')) {
            foreach ($this->jsonResponse->offers->merchantNew as $merchantNewOffer) {
                $this->merchantNewOffers[] = new Offer($merchantNewOffer);
            }
        }

        if (property_exists($this->jsonResponse->offers, 'merchantUsed')) {
            foreach ($this->jsonResponse->offers->merchantUsed as $merchantUsedOffer) {
                $this->merchantUsedOffers[] = new Offer($merchantUsedOffer);
            }
        }
    }

    /**
     * Parse any extra properties into an array
     */
    protected function parseExtras()
    {
        if (property_exists($this->jsonResponse, 'extras')) {
            $this->extras = get_object_vars($this->jsonResponse->extras);
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
     * Get an array of all extras
     *
     * @return array
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Check whether there is an extra defined with the specified key
     *
     * @param $key
     * @return bool
     */
    public function hasExtra($key)
    {
        return array_key_exists($key, $this->extras);
    }

    /**
     * Get a single extra
     *
     * @param $key
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
     * Check if the UPC is provided in the extra properties
     *
     * @return bool
     */
    public function hasUpcIdType()
    {
        return $this->hasExtra('upc') && !empty($this->extras['upc']);
    }
}
