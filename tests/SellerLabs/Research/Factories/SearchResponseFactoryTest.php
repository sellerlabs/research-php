<?php

namespace Tests\SellerLabs\Research\Factories;

use Exception;
use SellerLabs\Research\Entities\SearchProduct;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\Factories\SearchResponseFactory;

/**
 * Class SearchResponseFactoryTest
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\Research\Factories
 */
class SearchResponseFactoryTest extends ResponseFactoryTestCase
{
    public function testConstructor()
    {
        $search = (new SearchResponseFactory())->makeFromResponse(
            $this->makeResponseRelative(
                '../Responses/Resources/SearchResponse.json'
            )
        );

        $this->assertFalse($search->isEmpty());

        foreach ($search->getSearchProducts() as $product) {
            $this->assertInstanceOf(SearchProduct::class, $product);
        }

        $this->assertInstanceOf(SearchProduct::class, $search->first());

        // Check that the product got the correct data
        $this->assertEquals(
            'toy_display_on_website',
            $search->first()->getCategoryId()
        );

        // Check that empty rank data is properly handled
        $second = $search->getSearchProducts()[1];

        $this->assertNull($second->getRank());
        $this->assertNull($second->getCategoryId());
    }

    public function testFirstWithEmpty()
    {
        $search = (new SearchResponseFactory())->makeFromResponse(
            $this->makeResponseRelative(
                '../Responses/Resources/EmptySearchResponse.json'
            )
        );

        $this->assertTrue($search->isEmpty());
        $this->assertNull($search->first());
    }

    public function testConstructorWithInvalid()
    {
        $this->setExpectedException(InvalidFormatException::class);

        (new SearchResponseFactory())->makeFromResponse(
            $this->makeResponseRelative(
                '../Responses/Resources/InvalidSearchResponse.json'
            )
        );
    }

    /**
     * @expectedException \Exception
     */
    public function testConstructorWithError()
    {
        $this->setExpectedException(Exception::class);

        (new SearchResponseFactory())->makeFromResponse(
            $this->makeResponseRelative(
                '../Responses/Resources/ErrorResponse.json'
            )
        );
    }
}
