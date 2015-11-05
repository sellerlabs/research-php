<?php

/**
 * Copyright 2014-2015, SellerLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Snagshout package
 */

namespace Tests\SellerLabs\Research\Entities;

use SellerLabs\Research\Entities\RelationshipBag;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class RelationshipBagTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package Tests\SellerLabs\Research\Entities
 */
class RelationshipBagTest extends TestCase
{
    public function testConstruct()
    {
        $relationships = "{
          \"children\": [
            {
              \"asin\": \"B013RUF59A\",
              \"color\": \"Tan\",
              \"size\": \"34W x 30L\"
            }
          ],
          \"parents\": [
            {
              \"asin\": \"B013RUF9IC\",
              \"color\": \"Tan\",
              \"size\": \"38WxL32\"
            }
          ]
        }";

        $bag = new RelationshipBag(
            json_decode($relationships, true)
        );

        $this->assertEquals(
            'B013RUF59A',
            $bag->getChildren()[0]->getAsin()
        );

        $this->assertEquals(
            [
                'color' => 'Tan',
                'size' => '34W x 30L'
            ],
            $bag->getChildren()[0]->getProperties()
        );

        $this->assertEquals(
            'B013RUF9IC',
            $bag->getParents()[0]->getAsin()
        );

        $this->assertEquals(
            [
                'color' => 'Tan',
                'size' => '38WxL32'
            ],
            $bag->getParents()[0]->getProperties()
        );

    }
}
