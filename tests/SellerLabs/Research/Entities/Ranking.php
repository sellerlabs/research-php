<?php

/**
 * Copyright 2014-2015, SellerLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Snagshout package
 */
use SellerLabs\Research\Entities\Ranking;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class Ranking
 *
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 */
class RankingTest extends TestCase
{
    public function testConstruct()
    {
        $json = "
        {
            \"ProductCategoryId\": \"apparel_display_on_website\",
            \"Rank\": 93289
        }";

        $ranking = new Ranking(
            json_decode($json, true)
        );

        $this->assertEquals(
            'apparel_display_on_website',
            $ranking->getCategoryId()
        );

        $this->assertEquals(
            '93289',
            $ranking->getRank()
        );
    }
}
