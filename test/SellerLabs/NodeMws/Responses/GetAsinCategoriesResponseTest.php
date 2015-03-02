<?php

namespace Tests\SellerLabs\NodeMws\Responses;

use GuzzleHttp\Message\ResponseInterface;
use PHPUnit_Framework_TestCase;
use SellerLabs\NodeMws\Responses\GetAsinCategoriesResponse;
use Mockery;

/**
 * Class GetAsinCategoriesResponseTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\NodeMws\Responses
 */
class GetAsinCategoriesResponseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    protected $responseJson;

    /**
     * @var ResponseInterface
     */
    protected $responseMock;

    public function setUp ()
    {
        $responseMock = Mockery::mock(
            'GuzzleHttp\Message\ResponseInterface'
        );

        $this->responseJson = file_get_contents(
            dirname(__FILE__) . '/Resources/GetAsinCategoriesResponse.json'
        );

        $responseMock
            ->shouldReceive('getBody')
            ->andReturn($this->responseJson);

        $this->responseMock = $responseMock;
    }

    public function tearDown()
    {
        Mockery::close();
    }

    public function testConstruct()
    {
        $getAsinCategories = new GetAsinCategoriesResponse(
            $this->responseMock
        );

        // Make sure all category mappings are real category mappings
        $mappings = $getAsinCategories->getCategoryMappings();
        foreach ($mappings as $categoryMapping) {
            $this->assertInstanceOf(
                '\SellerLabs\NodeMws\Entities\CategoryMapping',
                $categoryMapping
            );
        }

        $this->assertInstanceOf(
            '\SellerLabs\NodeMws\Entities\CategoryMapping',
            $getAsinCategories->getMainCategory()
        );
        $this->assertEquals(
            'Literature & Fiction',
            $getAsinCategories->getMainCategory()->getCategory()
        );
    }
}
