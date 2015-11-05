<?php

namespace SellerLabs\Research\Entities;

/**
 * Class SearchProduct
 *
 * Abstraction class to hold products returned from NodeMws search response.
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @@author Eduardo Trujillo <ed@sellerlabs.com>
 * @package SellerLabs\Research\Entities
 */
class SearchProduct extends BaseEntity
{
    /**
     * @var Ranking[]
     */
    public $rankings;

    /**
     * @var string
     */
    protected $catalog;

    /**
     * productId
     *
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
    protected $categoryId;

    /**
     * @var string
     */
    protected $weight;

    /**
     * @var RelationshipBag
     */
    protected $relationships;

    /**
     * @return string
     */
    public function getAsin()
    {
        return $this->asin;
    }

    /**
     * @param string $asin
     */
    public function setAsin($asin)
    {
        $this->asin = $asin;
    }

    /**
     * @return string
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * @param string $catalog
     */
    public function setCatalog($catalog)
    {
        $this->catalog = $catalog;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param int $rank
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * @deprecated
     * @return string
     */
    public function getCategory()
    {
        return $this->categoryId;
    }

    /**
     * Get the Id of the main category of this product
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param string $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param Ranking[] $rankings
     */
    public function setRankings(array $rankings)
    {
        $this->rankings = $rankings;
    }

    /**
     * @param RelationshipBag $relationships
     */
    public function setRelationships(RelationshipBag $relationships)
    {
        $this->relationships = $relationships;
    }

    /**
     * @return RelationshipBag
     */
    public function getRelationships()
    {
        return $this->relationships;
    }
}
