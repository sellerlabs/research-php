<?php

namespace SellerLabs\NodeMws;

/**
 * Class FormatUtils
 *
 * Various format utility functions
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\NodeMws
 */
class FormatUtils
{
    /**
     * Format a price to two decimals
     *
     * @param $number
     * @param string $currency
     *
     * @return string
     */
    public static function formatPrice($number, $currency = '$')
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
