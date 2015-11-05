<?php

namespace SellerLabs\Research\Factories;

use Chromabits\Nucleus\Foundation\BaseObject;
use Psr\Http\Message\ResponseInterface;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\Interfaces\ResponseFactoryInterface;

/**
 * Class BaseResponseFactory
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @package SellerLabs\Research\Factories
 */
abstract class BaseResponseFactory extends BaseObject implements
    ResponseFactoryInterface
{
    /**
     * Attempt to parse the response body from JSON to an associative array.
     *
     * @param ResponseInterface $response
     *
     * @return mixed
     * @throws InvalidFormatException
     */
    protected function parse(ResponseInterface $response)
    {
        $result = json_decode($response->getBody()->getContents(), true);

        if ($result === null) {
            throw new InvalidFormatException(
                'Unable to parse the response JSON contents. Are you sure'
                . ' this is JSON?'
            );
        }

        return $result;
    }
}