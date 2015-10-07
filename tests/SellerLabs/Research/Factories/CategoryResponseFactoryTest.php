<?php

namespace Tests\SellerLabs\Research\Factories;

use SellerLabs\Research\Factories\CategoryResponseFactory;

/**
 * Class CategoryResponseFactoryTest
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package tests\SellerLabs\Research\Factories
 */
class CategoryResponseFactoryTest extends ResponseFactoryTestCase
{
    public function testConstruct()
    {
        $getCategoryById = (new CategoryResponseFactory())->makeFromResponse(
            $this->makeResponseRelative(
                '../Responses/Resources/GetCategoryByIdResponse.json'
            )
        );

        $this->assertEquals('10399', $getCategoryById->getCategoryId());
        $this->assertEquals('Classics', $getCategoryById->getCategory());
    }
}