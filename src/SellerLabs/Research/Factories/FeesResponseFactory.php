<?php

namespace SellerLabs\Research\Factories;

use SellerLabs\Nucleus\Support\Arr;
use Psr\Http\Message\ResponseInterface;
use SellerLabs\Research\Enum\FeesSetType;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\Responses\BaseResponse;
use SellerLabs\Research\Responses\FeesResponse;

/**
 * Class FeesResponseFactory
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @package SellerLabs\Research\Factories
 */
class FeesResponseFactory extends BaseResponseFactory
{
    /**
     * Parse and build a rich response object from an HTTP response.
     *
     * @param ResponseInterface $response
     *
     * @return FeesResponse
     * @throws InvalidFormatException
     */
    public function makeFromResponse(ResponseInterface $response)
    {
        $body = $this->parse($response);

        $feesResponse = new FeesResponse();

        $feesResponse->setInnerResponse($response);
        $this->parseProperties($feesResponse, $body);

        return $feesResponse;
    }

    /**
     * Parse most properties from the response.
     *
     * @param FeesResponse $feesResponse
     * @param array $body
     *
     * @throws InvalidFormatException
     */
    protected function parseProperties(FeesResponse $feesResponse, array $body)
    {
        if (!Arr::has($body, 'data')) {
            throw new InvalidFormatException(
                'The `data` property is missing from the response object.'
            );
        }

        $data = $body['data'];
        $factory = new FeesSetFactory();

        if (Arr::has($data, 'sizeTier')) {
            $feesResponse->setSizeTier($data['sizeTier']);
        }

        if (Arr::has($data, 'fbaFees')) {
            $set = $factory->makeFromArray($data['fbaFees']);
            $set->setType(FeesSetType::TYPE_FBA);

            $feesResponse->setFbaFees($set);
        }

        if (Arr::has($data, 'mfnFees')) {
            $set = $factory->makeFromArray($data['mfnFees']);
            $set->setType(FeesSetType::TYPE_MERCHANT_FULFILLED);

            $feesResponse->setMerchantFees($set);
        }
    }
}
