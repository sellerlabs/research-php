<?php
use SellerLabs\NodeMws\Responses\OffersResponse;

class OffersResponseTest extends PHPUnit_Framework_TestCase
{
    protected $offersResponse;
    protected $responseInterfaceMock;

    public function setUp()
    {
        $responseInterfaceMock = Mockery::mock('GuzzleHttp\Message\ResponseInterface');

        $this->offersResponse = file_get_contents(dirname(__FILE__) . '/Resources/OffersResponse.json');

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

        foreach ($offers->getFbaNewOffers() as $offer) {
            $this->assertInstanceOf('\SellerLabs\NodeMws\Entities\Offer', $offer);
        }

        foreach ($offers->getFbaUsedOffers() as $offer) {
            $this->assertInstanceOf('\SellerLabs\NodeMws\Entities\Offer', $offer);
        }

        foreach ($offers->getMerchantNewOffers() as $offer) {
            $this->assertInstanceOf('\SellerLabs\NodeMws\Entities\Offer', $offer);
        }

        foreach ($offers->getMerchantUsedOffers() as $offer) {
            $this->assertInstanceOf('\SellerLabs\NodeMws\Entities\Offer', $offer);
        }

        $this->assertEquals('B0097BEE9Q', $offers->getProductIdCode());
    }
}