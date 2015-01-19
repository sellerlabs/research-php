<?php

use SellerLabs\NodeMws\Responses\FeesResponse;

class FeesResponseTest extends \PHPUnit_Framework_TestCase
{

    protected $responseInterfaceMock;
    protected $feesResponse;

    public function setUp()
    {
        $responseInterfaceMock = Mockery::mock('GuzzleHttp\Message\ResponseInterface');

        $this->feesResponse = file_get_contents(dirname(__FILE__) . '/Resources/FeesResponse.json');

        $responseInterfaceMock->
        shouldReceive('getBody')
            ->andReturn($this->feesResponse);

        $this->responseInterfaceMock = $responseInterfaceMock;
    }

    public function tearDown()
    {
        Mockery::close();
    }

    public function testConstruct()
    {
        $fees = new FeesResponse($this->responseInterfaceMock);

        $this->assertInstanceOf('\SellerLabs\NodeMws\Entities\FeesSet', $fees->getFbaFees());
        $this->assertInstanceOf('\SellerLabs\NodeMws\Entities\FeesSet', $fees->getMerchantFees());
        $this->assertEquals('large-standard', $fees->getSizeTier());
    }
}