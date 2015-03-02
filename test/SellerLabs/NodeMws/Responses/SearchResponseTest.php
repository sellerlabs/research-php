<?php

namespace Tests\SellerLabs\NodeMws\Responses;

use GuzzleHttp\Message\ResponseInterface;
use Mockery;
use PHPUnit_Framework_TestCase;
use SellerLabs\NodeMws\Responses\SearchResponse;

/**
 * Class SearchResponseTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package Tests\SellerLabs\NodeMws
 */
class SearchResponseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    protected $searchResponse;

    /**
     * @var ResponseInterface
     */
    protected $responseMock;

    public function setUp()
    {
        $responseMock = Mockery::mock(
            'GuzzleHttp\Message\ResponseInterface'
        );

        $this->searchResponse = file_get_contents(
            dirname(__FILE__) . '/Resources/SearchResponse.json'
        );

        $responseMock->
        shouldReceive('getBody')
            ->andReturn($this->searchResponse);

        $this->responseMock = $responseMock;
    }

    public function tearDown()
    {
        Mockery::close();
    }

    public function testConstruct()
    {
        $search = new SearchResponse($this->responseMock);

        $this->assertFalse($search->isEmpty());

        foreach ($search->getSearchProducts() as $product) {
            $this->assertInstanceOf(
                'SellerLabs\NodeMws\Entities\SearchProduct',
                $product
            );
        }

        $this->assertInstanceOf(
            'SellerLabs\NodeMws\Entities\SearchProduct',
            $search->first()
        );
    }
}
