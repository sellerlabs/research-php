<?php

use SellerLabs\NodeMws\Responses\GetAsinCategoriesResponse;
use \Mockery;

class GetAsinCategoriesResponseTest extends \PHPUnit_Framework_TestCase {

    protected $responseInterfaceMock;

    public function setUp () {
        $responseInterfaceMock = Mockery::mock('GuzzleHttp\Message\ResponseInterface');

        $getAsinCategoriesResponseJson = file_get_contents(dirname(__FILE__) . '/Resources/GetAsinCategoriesResponse.json');

        $responseInterfaceMock->
            shouldReceive('getBody')
            ->andReturn($getAsinCategoriesResponseJson);

        $this->responseInterfaceMock = $responseInterfaceMock;
    }

    public function tearDown() {
        Mockery::close();
    }

    public function testConstruct() {
        $getAsinCategories = new GetAsinCategoriesResponse($this->responseInterfaceMock);
        $this->assertEquals(true, true);
    }
}