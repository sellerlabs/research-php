<?php

namespace SellerLabs\Research\Entities;

use Exception;
use SellerLabs\Research\Enum\FeesSetType;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\FormatUtils;

/**
 * Class FeesSet
 *
 * Represents a set of fees from a fees response
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Entities
 */
class FeesSet extends BaseEntity
{
    /**
     * @var float
     */
    protected $price;

    /**
     * @var float
     */
    protected $revenue;

    /**
     * @var float
     */
    protected $amazonCommission;

    /**
     * @var float
     */
    protected $amazonVar;

    /**
     * @var float
     */
    protected $fbaWeight;

    /**
     * @var float
     */
    protected $fbaPick;

    /**
     * @var float
     */
    protected $fbaOrder;

    /**
     * @var float
     */
    protected $feesTotal;

    /**
     * @var float
     */
    protected $netIncome;

    /**
     * @var string
     */
    protected $category;

    /**
     * The fees type (MFN or FBA)
     *
     * @var string
     */
    protected $type;

    /**
     * @return float
     */
    public function getAmazonCommission()
    {
        return $this->amazonCommission;
    }

    /**
     * @param float $amazonCommission
     */
    public function setAmazonCommission($amazonCommission)
    {
        $this->amazonCommission = $amazonCommission;
    }

    /**
     * @return float
     */
    public function getAmazonVar()
    {
        return $this->amazonVar;
    }

    /**
     * @param float $amazonVar
     */
    public function setAmazonVar($amazonVar)
    {
        $this->amazonVar = $amazonVar;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @throws Exception
     * @return float
     */
    public function getFbaOrder()
    {
        if ($this->type != self::TYPE_FBA) {
            throw new Exception('This fee is not available for this type');
        }

        return $this->fbaOrder;
    }

    /**
     * @param float $fbaOrder
     */
    public function setFbaOrder($fbaOrder)
    {
        $this->fbaOrder = $fbaOrder;
    }

    /**
     * @throws Exception
     * @return float
     */
    public function getFbaPick()
    {
        if ($this->type != self::TYPE_FBA) {
            throw new Exception('This fee is not available for this type');
        }

        return $this->fbaPick;
    }

    /**
     * @param float $fbaPick
     */
    public function setFbaPick($fbaPick)
    {
        $this->fbaPick = $fbaPick;
    }

    /**
     * @throws Exception
     * @return float
     */
    public function getFbaWeight()
    {
        if ($this->type != self::TYPE_FBA) {
            throw new Exception('This fee is not available for this type');
        }

        return $this->fbaWeight;
    }

    /**
     * @param float $fbaWeight
     */
    public function setFbaWeight($fbaWeight)
    {
        $this->fbaWeight = $fbaWeight;
    }

    /**
     * @return float
     */
    public function getFeesTotal()
    {
        return $this->feesTotal;
    }

    /**
     * @param float $feesTotal
     */
    public function setFeesTotal($feesTotal)
    {
        $this->feesTotal = $feesTotal;
    }

    /**
     * @return string
     */
    public function getFormattedFeesTotal()
    {
        return FormatUtils::formatPrice($this->feesTotal);
    }

    /**
     * @return float
     */
    public function getNetIncome()
    {
        return $this->netIncome;
    }

    /**
     * @param float $netIncome
     */
    public function setNetIncome($netIncome)
    {
        $this->netIncome = $netIncome;
    }

    /**
     * @return string
     */
    public function getFormattedNetIncome()
    {
        return FormatUtils::formatPrice($this->netIncome);
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
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * @param float $revenue
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the fees type
     *
     * @param $type
     *
     * @throws InvalidFormatException
     */
    public function setType($type)
    {
        if ($type != FeesSetType::TYPE_FBA
            && $type != FeesSetType::TYPE_MERCHANT_FULFILLED
        ) {
            throw new InvalidFormatException('This fee type is not supported');
        }

        $this->type = $type;
    }

    /**
     * Returns profit margin in a percentage
     *
     * @return string
     */
    public function getProfitMarginPercentage()
    {
        return FormatUtils::formatPercentage($this->getProfitMargin());
    }

    /**
     * Returns profit margin in a fraction
     *
     * @return float
     */
    public function getProfitMargin()
    {
        return $this->netIncome / $this->revenue;
    }
}
