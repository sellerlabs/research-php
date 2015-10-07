<?php

namespace tests\SellerLabs\Research\Factories;

use Tests\SellerLabs\Support\MockResponsesTrait;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class ResponseFactoryTestCase
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package tests\SellerLabs\Research\Factories
 */
class ResponseFactoryTestCase extends TestCase
{
    use MockResponsesTrait;

    /**
     * @param $relativePath
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function makeResponseRelative($relativePath)
    {
        return $this->makeResponse(__DIR__ . '/' . $relativePath);
    }
}