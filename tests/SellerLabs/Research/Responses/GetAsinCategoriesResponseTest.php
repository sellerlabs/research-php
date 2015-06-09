<?php

namespace Tests\SellerLabs\Research\Responses;

use Mockery;
use SellerLabs\Research\Entities\CategoryMapping;
use SellerLabs\Research\Responses\GetAsinCategoriesResponse;
use Tests\SellerLabs\Support\MockResponsesTrait;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class GetAsinCategoriesResponseTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\Research\Responses
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
            $this->assertInstanceOf(CategoryMapping::class, $categoryMapping);
        }

        $this->assertInstanceOf(
            CategoryMapping::class,
            $getAsinCategories->getMainCategory()
        );
        $this->assertEquals(
            'Literature & Fiction',
            $getAsinCategories->getMainCategory()->getCategory()
        );
    }

    /**
     * @expectedException \SellerLabs\Research\Exceptions\InvalidFormatException
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
