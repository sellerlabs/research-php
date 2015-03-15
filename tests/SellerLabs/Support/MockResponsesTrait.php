<?php

namespace Tests\SellerLabs\Support;

use Mockery;

/**
 * Trait MockResponsesTrait
 *
 * Builds responses from JSON files for testing
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\Support
 */
trait MockResponsesTrait
{
    /**
     * Build a mock HTTP response out of a JSON file
     *
     * @param $jsonFile
     *
     * @return \Mockery\MockInterface
     */
    protected function makeResponse($jsonFile)
    {
        $responseMock = Mockery::mock('GuzzleHttp\Message\ResponseInterface');

        $responseMock->shouldReceive('getBody')
            ->andReturn(file_get_contents($jsonFile));

        return $responseMock;
    }
}
