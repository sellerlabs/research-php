<?php

namespace Tests\SellerLabs\Research;

use SellerLabs\Research\FormatUtils;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class FormatUtilsTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package Tests\SellerLabs\Research
 */
class FormatUtilsTest extends TestCase
{
    public function testFormatPriceDefault()
    {
        $price = 40;

        $price = FormatUtils::formatPrice($price);

        $this->assertEquals($price, "$40.00");
    }

    public function testFormatPriceSpecial()
    {
        $price = 40;
        $price = FormatUtils::formatPrice($price, "^");

        $this->assertEquals($price, "^40.00");
    }

    public function testFormatPercentage()
    {
        $percent = 0.4;
        $percent = FormatUtils::formatPercentage($percent);

        $this->assertEquals($percent, "40.00%");
    }
}
