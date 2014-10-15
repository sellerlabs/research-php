<?php

namespace SellerLabs\NodeMws\Entities;

use stdClass;

/**
 * Class Offer
 *
 * Represents a single offer returned from a NodeMws offers call
 *
 * @package SellerLabs\NodeMws\Entities
 */
class Offer
{
    /**
     * @var string
     */
    protected $condition;

    /**
     * @var string
     */
    protected $subcondition;

    /**
     * @var string
     */
    protected $fulfillmentCenter;

    /**
     * @var mixed
     */
    protected $shipdom;

    /**
     * @var mixed
     */
    protected $shipmax;

    /**
     * @var string
     */
    protected $rating;

    /**
     * @var int
     */
    protected $number;

    /**
     * @var int
     */
    protected $feedbackCount = 0;

    /**
     * @var mixed
     */
    protected $multi;

    /**
     * @var float
     */
    protected $price = 0.0;

    /**
     * @var float
     */
    protected $priceShipping = 0.0;

    /**
     * @var float
     */
    protected $priceLanded = 0.0;

    /**
     * Builds an offer object from a parse json object
     *
     * @param stdClass $parsedJsonOffer
     */
    public function __construct(stdClass $parsedJsonOffer)
    {
        $this->condition = $parsedJsonOffer->cond;

        $this->subcondition = $parsedJsonOffer->subcond;

        $this->fulfillmentCenter = $parsedJsonOffer->fc;

        $this->shipdom = $parsedJsonOffer->shipdom;

        $this->shipmax = $parsedJsonOffer->shipmax;

        $this->rating = $parsedJsonOffer->rating;

        $this->number = (int)$parsedJsonOffer->number;

        $this->feedbackCount = (int)$parsedJsonOffer->fbcount;

        $this->multi = $parsedJsonOffer->multi;

        $this->price = (double)$parsedJsonOffer->price;

        $this->priceShipping = (double)$parsedJsonOffer->priceShipping;

        $this->priceLanded = (double)$parsedJsonOffer->priceLanded;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @return int
     */
    public function getFeedbackCount()
    {
        return $this->feedbackCount;
    }

    /**
     * @return string
     */
    public function getFulfillmentCenter()
    {
        return $this->fulfillmentCenter;
    }

    /**
     * @return mixed
     */
    public function getMulti()
    {
        return $this->multi;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getPriceLanded()
    {
        return $this->priceLanded;
    }

    /**
     * @return float
     */
    public function getPriceShipping()
    {
        return $this->priceShipping;
    }

    /**
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return mixed
     */
    public function getShipdom()
    {
        return $this->shipdom;
    }

    /**
     * @return mixed
     */
    public function getShipmax()
    {
        return $this->shipmax;
    }

    /**
     * @return string
     */
    public function getSubcondition()
    {
        return $this->subcondition;
    }
}
