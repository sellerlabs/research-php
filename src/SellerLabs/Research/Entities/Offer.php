<?php

namespace SellerLabs\Research\Entities;

/**
 * Class Offer
 *
 * Represents a single offer returned from a NodeMws offers call
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @@author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\Research\Entities
 */
class Offer extends BaseEntity
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
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param string $condition
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

    /**
     * @return int
     */
    public function getFeedbackCount()
    {
        return $this->feedbackCount;
    }

    /**
     * @param int $feedbackCount
     */
    public function setFeedbackCount($feedbackCount)
    {
        $this->feedbackCount = $feedbackCount;
    }

    /**
     * @return string
     */
    public function getFulfillmentCenter()
    {
        return $this->fulfillmentCenter;
    }

    /**
     * @param string $fulfillmentCenter
     */
    public function setFulfillmentCenter($fulfillmentCenter)
    {
        $this->fulfillmentCenter = $fulfillmentCenter;
    }

    /**
     * @return mixed
     */
    public function getMulti()
    {
        return $this->multi;
    }

    /**
     * @param mixed $multi
     */
    public function setMulti($multi)
    {
        $this->multi = $multi;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPriceLanded()
    {
        return $this->priceLanded;
    }

    /**
     * @param float $priceLanded
     */
    public function setPriceLanded($priceLanded)
    {
        $this->priceLanded = $priceLanded;
    }

    /**
     * @return float
     */
    public function getPriceShipping()
    {
        return $this->priceShipping;
    }

    /**
     * @param float $priceShipping
     */
    public function setPriceShipping($priceShipping)
    {
        $this->priceShipping = $priceShipping;
    }

    /**
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param string $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getShipdom()
    {
        return $this->shipdom;
    }

    /**
     * @param mixed $shipdom
     */
    public function setShipdom($shipdom)
    {
        $this->shipdom = $shipdom;
    }

    /**
     * @return mixed
     */
    public function getShipmax()
    {
        return $this->shipmax;
    }

    /**
     * @param mixed $shipmax
     */
    public function setShipmax($shipmax)
    {
        $this->shipmax = $shipmax;
    }

    /**
     * @return string
     */
    public function getSubcondition()
    {
        return $this->subcondition;
    }

    /**
     * @param string $subcondition
     */
    public function setSubcondition($subcondition)
    {
        $this->subcondition = $subcondition;
    }
}
