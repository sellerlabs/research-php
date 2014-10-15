<?php

namespace SellerLabs\NodeMws\Responses;

use GuzzleHttp\Message\ResponseInterface;
use SellerLabs\NodeMws\Entities\FeesSet;
use SellerLabs\NodeMws\Exceptions\InvalidFormatException;
use stdClass;

/**
 * Class FeesResponse
 *
 * Represents a fees call response from NodeMWS
 *
 * @package SellerLabs\NodeMws\Responses
 */
class FeesResponse
{
    /**
     * @var stdClass
     */
    protected $jsonResponse;

    /**
     * @var string
     */
    protected $sizeTier = 'unknown';

    /**
     * @var FeesSet
     */
    protected $merchantFees = null;

    /**
     * @var FeesSet
     */
    protected $fbaFees = null;

    /**
     * @param ResponseInterface $response
     * @throws InvalidFormatException
     */
    public function __construct(ResponseInterface $response)
    {
        // Parse the JSON into an stdClass object
        $rawResponse = json_decode($response->getBody());

        // Check that the data object is present
        if (!property_exists($rawResponse, 'data')) {
            throw new InvalidFormatException;
        }

        $this->jsonResponse = $rawResponse;

        // Parse size tier
        $this->parseSizeTier();

        // Parse fees
        $this->parseMerchantFees();
        $this->parseFbaFees();
    }

    /**
     * Parse the size tier
     */
    protected function parseSizeTier()
    {
        if (property_exists($this->jsonResponse->data, 'sizeTier')) {
            $this->sizeTier = $this->jsonResponse->data->sizeTier;
        }
    }

    /**
     * Parse merchant-fulfilled fees
     */
    protected function parseMerchantFees()
    {
        if (property_exists($this->jsonResponse->data, 'mfnFees')) {
            $this->merchantFees = new FeesSet($this->jsonResponse->data->mfnFees, FeesSet::TYPE_MFN);
        }
    }

    /**
     * Parse FBA fees
     */
    protected function parseFbaFees()
    {
        if (property_exists($this->jsonResponse->data, 'fbaFees')) {
            $this->fbaFees = new FeesSet($this->jsonResponse->data->fbaFees, FeesSet::TYPE_FBA);
        }
    }

    /**
     * Get FBA fees
     *
     * @return null|FeesSet
     */
    public function getFbaFees()
    {
        return $this->fbaFees;
    }

    /**
     * Get merchant-fulfilled fees
     *
     * @return null|FeesSet
     */
    public function getMerchantFees()
    {
        return $this->merchantFees;
    }

    /**
     * Get product size tier
     *
     * @return string
     */
    public function getSizeTier()
    {
        return $this->sizeTier;
    }
}
