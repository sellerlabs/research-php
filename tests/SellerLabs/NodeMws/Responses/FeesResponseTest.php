<?php

namespace Tests\SellerLabs\NodeMws\Responses;

use Mockery;
use SellerLabs\NodeMws\Responses\FeesResponse;
use Tests\SellerLabs\Support\MockResponsesTrait;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class FeesResponseTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\NodeMws\Responses
 */
class FeesResponseTest extends TestCase
{
    use MockResponsesTrait;

    public function testConstructor()
    {
        $fees = new FeesResponse($this->makeResponse(
            dirname(__FILE__) . '/Resources/FeesResponse.json'
        ));

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

    /**
     * @expectedException \SellerLabs\NodeMws\Exceptions\InvalidFormatException
     */
    public function testConstructorWithInvalid()
    {
        new FeesResponse($this->makeResponse(
            dirname(__FILE__) . '/Resources/InvalidSearchResponse.json'
        ));
    }
}
