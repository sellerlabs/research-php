<?php

namespace Tests\SellerLabs\Research\Factories;

use SellerLabs\Research\Factories\ItemSearchResponseFactory;

/**
 * Class ItemSearchResponseFactoryTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package Tests\SellerLabs\Research\Factories
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
