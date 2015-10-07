<?php

namespace Tests\SellerLabs\Research\Factories;

use SellerLabs\Research\Entities\CategoryMapping;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\Factories\CategoriesResponseFactory;

/**
 * Class CategoriesResponseFactoryTest
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\Research\Factories
 */
class CategoriesResponseFactoryTest extends ResponseFactoryTestCase
{
    public function testConstruct()
    {
        $getAsinCategories = (new CategoriesResponseFactory())
            ->makeFromResponse(
                $this->makeResponseRelative(
                    '../Responses/Resources/GetAsinCategoriesResponse.json'
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

    public function testConstructorWithInvalid()
    {
        $this->setExpectedException(InvalidFormatException::class);

        (new CategoriesResponseFactory())->makeFromResponse(
            $this->makeResponseRelative(
                '../Responses/Resources/InvalidSearchResponse.json'
            )
        );
    }
}