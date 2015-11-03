<?php

namespace Tests\SellerLabs\Research\Factories;

use SellerLabs\Research\Factories\ItemSearchResponseFactory;

/**
 * Class ItemSearchResponseFactoryTest
 *
 * @package Tests\SellerLabs\Research\Factories
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 */
class ItemSearchResponseFactoryTest extends ResponseFactoryTestCase
{
    public function testConstruct()
    {
        (new ItemSearchResponseFactory())
            ->makeFromResponse(
                $this->makeResponseRelative(
                    '../Responses/Resources/ItemSearchResponse.json'
                )
            );
    }
}