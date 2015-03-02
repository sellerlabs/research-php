<?php

namespace Tests\SellerLabs\NodeMws\Responses;

use GuzzleHttp\Message\ResponseInterface;
use PHPUnit_Framework_TestCase;
use SellerLabs\NodeMws\Responses\GetCategoryByIdResponse;
use Mockery;

/**
 * Class GetCategoryByIdResponseTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\NodeMws\Responses
 */
class GetCategoryByIdResponseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    protected $jsonResponse;

    /**
     * @var ResponseInterface
     */
    protected $responseMock;

    public function setUp ()
    {
        $responseMock = Mockery::mock('GuzzleHttp\Message\ResponseInterface');

        $this->jsonResponse = file_get_contents(
            dirname(__FILE__) . '/Resources/GetCategoryByIdResponse.json'
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

    public function testConstruct ()
    {
        $getCategoryById = new GetCategoryByIdResponse(
            $this->responseMock
        );

        $this->assertEquals('10399', $getCategoryById->getCategoryId());
        $this->assertEquals('Classics', $getCategoryById->getCategory());
    }
}
