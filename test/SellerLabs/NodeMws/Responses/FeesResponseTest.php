<?php

namespace Tests\SellerLabs\NodeMws\Responses;

use GuzzleHttp\Message\ResponseInterface;
use Mockery;
use PHPUnit_Framework_TestCase;
use SellerLabs\NodeMws\Responses\FeesResponse;

/**
 * Class FeesResponseTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\NodeMws\Responses
 */
class FeesResponseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    protected $jsonResponse;

    /**
     * @var ResponseInterface
     */
    protected $responseMock;

    public function setUp()
    {
        $responseMock = Mockery::mock(
            'GuzzleHttp\Message\ResponseInterface'
        );

        $this->jsonResponse = file_get_contents(
            dirname(__FILE__) . '/Resources/FeesResponse.json'
        );

        $responseMock
            ->shouldReceive('getBody')
            ->andReturn($this->jsonResponse);

        $this->responseMock = $responseMock;
    }

    public function tearDown()
    {
        Mockery::close();
    }

    public function testConstruct()
    {
        $fees = new FeesResponse($this->responseMock);

        $this->assertInstanceOf(
            'SellerLabs\NodeMws\Entities\FeesSet',
            $fees->getFbaFees()
        );
        $this->assertInstanceOf(
            'SellerLabs\NodeMws\Entities\FeesSet',
            $fees->getMerchantFees()
        );
        $this->assertEquals('large-standard', $fees->getSizeTier());
    }
}
