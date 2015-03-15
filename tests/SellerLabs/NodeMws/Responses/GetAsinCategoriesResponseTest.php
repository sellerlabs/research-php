<?php

namespace Tests\SellerLabs\NodeMws\Responses;

use Mockery;
use SellerLabs\NodeMws\Responses\GetAsinCategoriesResponse;
use Tests\SellerLabs\Support\MockResponsesTrait;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class GetAsinCategoriesResponseTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\NodeMws\Responses
 */
class GetAsinCategoriesResponseTest extends TestCase
{
    use MockResponsesTrait;

    public function testConstruct()
    {
        $getAsinCategories = new GetAsinCategoriesResponse(
            $this->makeResponse(
                dirname(__FILE__) . '/Resources/GetAsinCategoriesResponse.json'
            )
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

    /**
     * @expectedException \SellerLabs\NodeMws\Exceptions\InvalidFormatException
     */
    public function testConstructorWithInvalid()
    {
        new GetAsinCategoriesResponse(
            $this->makeResponse(
                dirname(__FILE__) . '/Resources/InvalidSearchResponse.json'
            )
        );
    }
}
