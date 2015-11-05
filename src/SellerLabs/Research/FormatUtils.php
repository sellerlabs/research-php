<?php

namespace SellerLabs\Research;

/**
 * Class FormatUtils
 *
 * Various format utility functions
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @package SellerLabs\Research
 */
class FormatUtils
{
    const CURRENCY_USD = '$';

    /**
     * Format a price to two decimals
     *
     * @param $number
     * @param string $currency
     *
     * @return string
     */
    public static function formatPrice($number, $currency = self::CURRENCY_USD)
    {
        return $currency . number_format($number, 2);
    }

    /**
     * Format a number into a percentage with two decimals
     *
     * @param $number
     *
     * @return string
     */
    public static function formatPercentage($number)
    {
        return number_format($number * 100, 2) . '%';
    }
}
