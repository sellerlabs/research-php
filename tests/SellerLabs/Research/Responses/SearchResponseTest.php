<?php

namespace Tests\SellerLabs\Research\Responses;

use Mockery;
use SellerLabs\Research\Responses\SearchResponse;
use Tests\SellerLabs\Support\MockResponsesTrait;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class SearchResponseTest
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package Tests\SellerLabs\Research\Responses
 */
class SearchResponseTest extends TestCase
{
    use MockResponsesTrait;

    public function testConstructor()
    {
        $responseMock = $this->makeResponse(
            dirname(__FILE__) . '/Resources/SearchResponse.json'
        );
        $search = new SearchResponse($responseMock);

        $this->assertFalse($search->isEmpty());

        foreach ($search->getSearchProducts() as $product) {
            $this->assertInstanceOf(
                'SellerLabs\Research\Entities\SearchProduct',
                $product
            );
        }

        $this->assertInstanceOf(
            'SellerLabs\Research\Entities\SearchProduct',
            $search->first()
        );

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
        $responseMock = $this->makeResponse(
            dirname(__FILE__) . '/Resources/EmptySearchResponse.json'
        );
        $search = new SearchResponse($responseMock);

        $this->assertTrue($search->isEmpty());
        $this->assertNull($search->first());
    }

    /**
     * @expectedException \SellerLabs\Research\Exceptions\InvalidFormatException
     */
    public function testConstructorWithInvalid()
    {
        $responseMock = $this->makeResponse(
            dirname(__FILE__) . '/Resources/InvalidSearchResponse.json'
        );
        new SearchResponse($responseMock);
    }

    /**
     * @expectedException \Exception
     */
    public function testConstructorWithError()
    {
        $responseMock = $this->makeResponse(
            dirname(__FILE__) . '/Resources/ErrorResponse.json'
        );
        new SearchResponse($responseMock);
    }
}
