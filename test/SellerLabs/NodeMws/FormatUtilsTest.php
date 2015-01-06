<?php

use SellerLabs\NodeMws\FormatUtils;

class FormatUtilsTest extends PHPUnit_Framework_TestCase {
    public function testFormatPriceDefault () {
        $price = 40;

        $price = FormatUtils::formatPrice($price);

        $this->assertEquals($price, "$40.00");
    }

    public function testFormatPriceSpecial () {
        $price = 40;
        $price = FormatUtils::formatPrice($price, "^");

        $this->assertEquals($price, "^40.00");
    }

    public function testFormatPercentage () {
        $percent = 0.4;
        $percent = FormatUtils::formatPercentage($percent);

        $this->assertEquals($percent, "40.00%");
    }
}