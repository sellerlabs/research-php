<?php

/**
 * Copyright 2014-2015, SellerLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Snagshout package
 */

namespace SellerLabs\Research\Factories;

use Chromabits\Nucleus\Support\Arr;
use Psr\Http\Message\ResponseInterface;
use SellerLabs\Research\Entities\Item;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\Responses\BaseResponse;
use SellerLabs\Research\Responses\ItemSearchResponse;

/**
 * Class ItemSearchResponseFactory
 *
 * @package SellerLabs\Research\Factories
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 */
class ItemSearchResponseFactory extends BaseResponseFactory
{
    /**
     * Parse and build a rich response object from an HTTP response.
     *
     * @param ResponseInterface $response
     *
     * @return BaseResponse
     * @throws InvalidFormatException
     */
    public function makeFromResponse(ResponseInterface $response)
    {
        $body = $this->parse($response);

        $itemSearchResponse = new ItemSearchResponse();
        $itemSearchResponse->setInnerResponse($response);

        $itemSearchResponse->setItems(
            $this->parseItems($body)
        );

        return $itemSearchResponse;
    }

    /**
     * Parse items out of a body
     *
     * @param $body
     *
     * @return array
     */
    protected function parseItems($body)
    {
        $items = Arr::dotGet($body, 'ItemSearchResponse.Items.Item', []);

        return array_map(function ($item) {
            return new Item($item);
        }, $items);
    }
}
