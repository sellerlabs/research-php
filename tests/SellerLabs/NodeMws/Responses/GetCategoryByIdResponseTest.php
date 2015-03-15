<?php

namespace Tests\SellerLabs\NodeMws\Responses;

use Mockery;
use SellerLabs\NodeMws\Responses\GetCategoryByIdResponse;
use Tests\SellerLabs\Support\MockResponsesTrait;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class GetCategoryByIdResponseTest
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\NodeMws\Responses
 */
class GetCategoryByIdResponseTest extends TestCase
{
    use MockResponsesTrait;

    public function testConstruct()
    {
        $getCategoryById = new GetCategoryByIdResponse(
            $this->makeResponse(
                dirname(__FILE__) . '/Resources/GetCategoryByIdResponse.json'
            )
        );

        $this->assertEquals('10399', $getCategoryById->getCategoryId());
        $this->assertEquals('Classics', $getCategoryById->getCategory());
    }
}
