<?php

namespace SellerLabs\Research\Entities;

use Exception;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\FormatUtils;
use stdClass;

/**
 * Class FeesSet
 *
 * Represents a set of fees from a fees response
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Entities
 */
class FeesSet
{
    /**
     * Merchant fulfilled fees
     */
    const TYPE_MFN = 'mfn';

    /**
     * FBA fulfilled fees
     */
    const TYPE_FBA = 'fba';

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
     * @param stdClass $parsedJsonFees
     * @param $type
     *
     * @throws InvalidFormatException
     */
    public function __construct(stdClass $parsedJsonFees, $type)
    {
        // Set the fees type
        $this->setType($type);

        $this->price = (double)$parsedJsonFees->price;

        $this->revenue = (double)$parsedJsonFees->revenue;

        $this->amazonCommission = (double)$parsedJsonFees->azComm;

        $this->amazonVar = (double)$parsedJsonFees->azVar;

        if (property_exists($parsedJsonFees, 'fbaWeight')) {
            $this->fbaWeight = (double)$parsedJsonFees->fbaWeight;
        }

        if (property_exists($parsedJsonFees, 'fbaPick')) {
            $this->fbaPick = (double)$parsedJsonFees->fbaPick;
        }

        if (property_exists($parsedJsonFees, 'fbaOrder')) {
            $this->fbaOrder = (double)$parsedJsonFees->fbaOrder;
        }

        $this->feesTotal = (double)$parsedJsonFees->feesTotal;

        $this->netIncome = (double)$parsedJsonFees->netIncome;

        $this->category = $parsedJsonFees->category;
    }

    /**
     * Set the fees type
     *
     * @param $type
     *
     * @throws InvalidFormatException
     */
    protected function setType($type)
    {
        if ($type != self::TYPE_FBA && $type != self::TYPE_MFN) {
            throw new InvalidFormatException('This fee type is not supported');
        }

        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getAmazonCommission()
    {
        return $this->amazonCommission;
    }

    /**
     * @return float
     */
    public function getAmazonVar()
    {
        return $this->amazonVar;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
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
     * @return float
     */
    public function getFeesTotal()
    {
        return $this->feesTotal;
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
     * @return float
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
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

    /**
     * Returns profit margin in a percentage
     *
     * @return string
     */
    public function getProfitMarginPercentage()
    {
        return FormatUtils::formatPercentage($this->getProfitMargin());
    }
}
