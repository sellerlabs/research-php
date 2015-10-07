<?php

namespace Tests\SellerLabs\Research\Factories;

use SellerLabs\Research\Entities\FeesSet;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\Factories\FeesResponseFactory;
use Tests\SellerLabs\Support\MockResponsesTrait;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class FeesResponseFactoryTest
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\Research\Factories
 */
class FeesResponseFactoryTest extends TestCase
{
    use MockResponsesTrait;

    public function testMakeFromResponse()
    {
        $fees = (new FeesResponseFactory())->makeFromResponse(
            $this->makeResponse(
                dirname(__FILE__) . '/../Responses/Resources/FeesResponse.json'
            )
        );

        $this->assertInstanceOf(FeesSet::class, $fees->getFbaFees());
        $this->assertInstanceOf(FeesSet::class, $fees->getMerchantFees());
        $this->assertEquals('large-standard', $fees->getSizeTier());
    }

    public function testConstructorWithInvalid()
    {
        $this->setExpectedException(InvalidFormatException::class);

        (new FeesResponseFactory())->makeFromResponse(
            $this->makeResponse(
                dirname(__FILE__)
                . '/../Responses/Resources/InvalidSearchResponse.json'
            )
        );
    }
}