<?php

namespace SellerLabs\NodeMws\Entities;

/**
 * Class SearchProduct
 *
 * Abstraction class to hold products returned from NodeMws search response.
 *
 * @package SellerLabs\NodeMws\Entities
 */
class SearchProduct
{
    /**
     * @var string
     */
    protected $catalog;

    /**
     * productId
     * @var string
     */
    protected $asin;

    /**
     * @var string
     */
    protected $ean;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $imageUrl;

    /**
     * @var string
     */
    protected $type;


    /**
     * Search rank is per-category
     *
     * @var int
     */
    protected $rank;

    /**
     * @var string
     */
    protected $category;

    /**
     * @var string
     */
    protected $weight;

    /**
     * Construct a search product from a parsed JSON object
     *
     * @param $jsonProduct
     */
    public function __construct($jsonProduct)
    {
        $this->catalog = $jsonProduct->catalog;
        $this->asin = $jsonProduct->productId;
        $this->ean = $jsonProduct->ean;
        $this->name = $jsonProduct->title;
        $this->imageUrl = $jsonProduct->image;
        $this->type = $jsonProduct->type;
        $this->weight = $jsonProduct->weight;

        // Rankings can be empty
        if (!empty($jsonProduct->rank)) {
            $this->rank = intVal($jsonProduct->rank->Rank);
            $this->category = $jsonProduct->rank->ProductCategoryId;
        }
    }

    /**
     * @return string
     */
    public function getAsin()
    {
        return $this->asin;
    }

    /**
     * @return string
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
