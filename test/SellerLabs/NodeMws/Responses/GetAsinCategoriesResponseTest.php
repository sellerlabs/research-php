<?php

use SellerLabs\NodeMws\Responses\GetAsinCategoriesResponse;
use \Mockery;

class GetAsinCategoriesResponseTest extends \PHPUnit_Framework_TestCase {

    protected $getAsinCategoriesResponseJson;
    protected $responseInterfaceMock;

    public function setUp () {
        $responseInterfaceMock = Mockery::mock('GuzzleHttp\Message\ResponseInterface');

        $this->getAsinCategoriesResponseJson = file_get_contents(dirname(__FILE__) . '/Resources/GetAsinCategoriesResponse.json');

        $responseInterfaceMock->
            shouldReceive('getBody')
            ->andReturn($this->getAsinCategoriesResponseJson);

        $this->responseInterfaceMock = $responseInterfaceMock;
    }

    public function tearDown() {
        Mockery::close();
    }

    public function testConstruct() {
        $getAsinCategories = new GetAsinCategoriesResponse($this->responseInterfaceMock);

        // Make sure all category mappings are real category mappings
        foreach( $getAsinCategories->getCategoryMappings() as $categoryMapping) {
            $this->assertInstanceOf('\SellerLabs\NodeMws\Entities\CategoryMapping', $categoryMapping);
        }

        $this->assertInstanceOf(
            '\SellerLabs\NodeMws\Entities\CategoryMapping',
            $getAsinCategories->getMainCategory()
        );

        $this->assertEquals('Literature & Fiction', $getAsinCategories->getMainCategory()->getCategory());
    }
}