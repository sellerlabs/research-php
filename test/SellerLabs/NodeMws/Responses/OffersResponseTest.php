<?php

namespace Tests\SellerLabs\NodeMws;

use GuzzleHttp\Message\ResponseInterface;
use Mockery;
use PHPUnit_Framework_TestCase;
use SellerLabs\NodeMws\Responses\OffersResponse;

/**
 * Class OffersResponseTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package Tests\SellerLabs\NodeMws
 */
class OffersResponseTest extends PHPUnit_Framework_TestCase
{
    /**
     * Response
     *
     * @var OffersResponse
     */
    protected $offersResponse;

    /**
     * @var ResponseInterface
     */
    protected $responseInterfaceMock;

    public function setUp()
    {
        $responseInterfaceMock = Mockery::mock(
            'GuzzleHttp\Message\ResponseInterface'
        );

        $this->offersResponse = file_get_contents(
            dirname(__FILE__) . '/Resources/OffersResponse.json'
        );

        $responseInterfaceMock->
        shouldReceive('getBody')
            ->andReturn($this->offersResponse);

        $this->responseInterfaceMock = $responseInterfaceMock;
    }

    public function tearDown()
    {
        Mockery::close();
    }

    public function testConstruct()
    {
        $offers = new OffersResponse($this->responseInterfaceMock);

        $results = array_merge(
            $offers->getFbaNewOffers(),
            $offers->getFbaUsedOffers(),
            $offers->getMerchantNewOffers(),
            $offers->getMerchantUsedOffers()
        );

        foreach ($results as $offer) {
            $this->assertInstanceOf(
                '\SellerLabs\NodeMws\Entities\Offer',
                $offer
            );
        }

        $this->assertEquals('B0097BEE9Q', $offers->getProductIdCode());
    }
}
