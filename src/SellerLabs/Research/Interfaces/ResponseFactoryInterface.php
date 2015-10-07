<?php

namespace SellerLabs\Research\Interfaces;

use Psr\Http\Message\ResponseInterface;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\Responses\BaseResponse;

/**
 * Interface ResponseFactoryInterface
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\Research\Interfaces
 */
interface ResponseFactoryInterface
{
    /**
     * Parse and build a rich response object from an HTTP response.
     *
     * @param ResponseInterface $response
     *
     * @return BaseResponse
     * @throws InvalidFormatException
     */
    public function makeFromResponse(ResponseInterface $response);
}