<?php

namespace Tests\SellerLabs\Research\Factories;

use SellerLabs\Research\Entities\Offer;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\Factories\OffersResponseFactory;

/**
 * Class OffersResponseFactoryTest
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package tests\SellerLabs\Research\Factories
 */
class OffersResponseFactoryTest extends ResponseFactoryTestCase
{
    public function testEverything()
    {
        $offers = (new OffersResponseFactory())->makeFromResponse(
            $this->makeResponseRelative(
                '../Responses/Resources/OffersResponse.json'
            )
        );

        $results = array_merge(
            $offers->getFbaNewOffers(),
            $offers->getFbaUsedOffers(),
            $offers->getMerchantNewOffers(),
            $offers->getMerchantUsedOffers()
        );

        foreach ($results as $offer) {
            $this->assertInstanceOf(Offer::class, $offer);
        }

        $this->assertEquals('B0097BEE9Q', $offers->getProductIdCode());
        $this->assertEquals('asin', $offers->getProductIdType());
        $this->assertInternalType('array', $offers->getExtras());
        $this->assertEquals(125, $offers->getExtra('newLowest'));
        $this->assertTrue($offers->hasExtra('newLowest'));
        $this->assertFalse($offers->hasExtra('newLowestNope'));
        $this->assertFalse($offers->hasEanIdType());
        $this->assertFalse($offers->hasUpcIdType());
    }

    public function testConstructorWithInvalid()
    {
        $this->setExpectedException(InvalidFormatException::class);

        (new OffersResponseFactory())->makeFromResponse(
            $this->makeResponseRelative(
                '../Responses/Resources/InvalidSearchResponse.json'
            )
        );
    }
}