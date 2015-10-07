<?php

namespace SellerLabs\Research\Factories;

use Chromabits\Nucleus\Support\Arr;
use Psr\Http\Message\ResponseInterface;
use SellerLabs\Research\Enum\OfferCondition;
use SellerLabs\Research\Enum\OfferType;
use SellerLabs\Research\Exceptions\InvalidFormatException;
use SellerLabs\Research\Responses\OffersResponse;

/**
 * Class OffersResponseFactory
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\Research\Factories
 */
class OffersResponseFactory extends BaseResponseFactory
{
    /**
     * Parse and build a rich response object from an HTTP response.
     *
     * @param ResponseInterface $response
     *
     * @return OffersResponse
     * @throws InvalidFormatException
     */
    public function makeFromResponse(ResponseInterface $response)
    {
        $body = $this->parse($response);

        $this->assertIsSuccessful($body);

        $offersResponse = new OffersResponse();

        $offersResponse->setInnerResponse($response);
        $this->parseIds($offersResponse, $body);
        $this->parseOffers($offersResponse, $body);
        $this->parseExtras($offersResponse, $body);

        return $offersResponse;
    }

    /**
     * Assert that the response is valid and successful.
     *
     * @param array $body
     *
     * @throws InvalidFormatException
     */
    protected function assertIsSuccessful(array $body)
    {
        if (!Arr::has($body, 'offers')) {
            throw new InvalidFormatException(
                'The `offers` property is missing from the response.'
            );
        }
    }

    /**
     * Parse the product ids.
     *
     * @param OffersResponse $offersResponse
     * @param array $body
     */
    protected function parseIds(OffersResponse $offersResponse, array $body)
    {
        if (Arr::has($body, 'type')) {
            $offersResponse->setProductIdType($body['type']);
        }

        if (Arr::has($body, 'id')) {
            $offersResponse->setProductIdCode($body['id']);
        }
    }

    /**
     * Parse offers (if any are provided).
     *
     * @param OffersResponse $offersResponse
     * @param array $body
     */
    protected function parseOffers(OffersResponse $offersResponse, array $body)
    {
        $offers = $body['offers'];
        $factory = new OfferFactory();

        foreach (OfferType::getValues() as $type) {
            foreach (OfferCondition::getValues() as $condition) {
                $key = vsprintf('%s%s', [$type, ucfirst($condition)]);

                if (!Arr::has($offers, $key)) {
                    continue;
                }

                foreach ($offers[$key] as $offer) {
                    $offersResponse->addOffer(
                        $type,
                        $condition,
                        $factory->makeFromArray($offer)
                    );
                }
            }
        }
    }

    /**
     * Parse extras array provided by the API.
     *
     * @param OffersResponse $offersResponse
     * @param array $body
     */
    protected function parseExtras(OffersResponse $offersResponse, array $body)
    {
        if (Arr::has($body, 'extras')) {
            $offersResponse->setExtras($body['extras']);
        }
    }
}