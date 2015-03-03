<?php

namespace Tests\SellerLabs\NodeMws;

use PHPUnit_Framework_TestCase;
use SellerLabs\Research\FormatUtils;

/**
 * Class FormatUtilsTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package Tests\SellerLabs\NodeMws
 */
class FormatUtilsTest extends PHPUnit_Framework_TestCase
{
    public function testFormatPriceDefault ()
    {
        $price = 40;

        $price = FormatUtils::formatPrice($price);

        $this->assertEquals($price, "$40.00");
    }

    public function testFormatPriceSpecial ()
    {
        $price = 40;
        $price = \SellerLabs\Research\FormatUtils::formatPrice($price, "^");

        $this->assertEquals($price, "^40.00");
    }

    public function testFormatPercentage ()
    {
        $percent = 0.4;
        $percent = FormatUtils::formatPercentage($percent);

        $this->assertEquals($percent, "40.00%");
    }
}
