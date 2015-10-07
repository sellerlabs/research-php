<?php

namespace Tests\SellerLabs\Support;

use Mockery;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

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
     * @return ResponseInterface
     */
    protected function makeResponse($jsonFile)
    {
        $streamMock = Mockery::mock(StreamInterface::class);
        $streamMock->shouldReceive('getContents')
            ->andReturn(file_get_contents($jsonFile));;

        $responseMock = Mockery::mock(ResponseInterface::class);

        $responseMock->shouldReceive('getBody')->andReturn($streamMock);

        return $responseMock;
    }
}
