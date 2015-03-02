<?php
use SellerLabs\NodeMws\Responses\GetCategoryByIdResponse;


class GetCategoryByIdResponseTest extends \PHPUnit_Framework_TestCase {

    protected $getCategoryByIdResponse;
    protected $responseInterfaceMock;

    public function setUp () {
        $responseInterfaceMock = Mockery::mock('GuzzleHttp\Message\ResponseInterface');

        $this->getCategoryByIdResponse = file_get_contents(dirname(__FILE__) . '/Resources/GetCategoryByIdResponse.json');

        $responseInterfaceMock->
        shouldReceive('getBody')
            ->andReturn($this->getCategoryByIdResponse);

        $this->responseInterfaceMock = $responseInterfaceMock;
    }

    public function tearDown() {
        Mockery::close();
    }

    public function testConstruct () {
        $getCategoryById = new GetCategoryByIdResponse($this->responseInterfaceMock);

        $this->assertEquals('10399', $getCategoryById->getCategoryId());
        $this->assertEquals('Classics', $getCategoryById->getCategory());
    }
}