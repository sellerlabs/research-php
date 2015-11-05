<?php

namespace Tests\SellerLabs\Research\Factories;

use Psr\Http\Message\ResponseInterface;
use Tests\SellerLabs\Support\MockResponsesTrait;
use Tests\SellerLabs\Support\TestCase;

/**
 * Class ResponseFactoryTestCase
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\Research\Factories
 */
class ResponseFactoryTestCase extends TestCase
{
    use MockResponsesTrait;

    /**
     * @param string $relativePath
     *
     * @return ResponseInterface
     */
    protected function makeResponseRelative($relativePath)
    {
        return $this->makeResponse(__DIR__ . '/' . $relativePath);
    }
}
