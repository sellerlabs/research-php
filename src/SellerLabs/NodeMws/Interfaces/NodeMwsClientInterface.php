<?php

namespace SellerLabs\NodeMws\Interfaces;

use SellerLabs\NodeMws\Responses\SearchResponse;
use SellerLabs\NodeMws\Responses\OffersResponse;
use SellerLabs\NodeMws\Responses\FeesResponse;

/**
 * Interface NodeMwsClientInterface
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\NodeMws\Interfaces
 */
interface NodeMwsClientInterface
{
    /**
     * Generate an authorization code for NodeMWS
     *
     * @return string
     */
    public function generateCode($timestamp = null);

    /**
     * Get the current offers for an ASIN from NodeMWS
     *
     * @param string $asin
     * @return OffersResponse
     */
    public function getOffers($asin);

    /**
     * Call the fees endpoint of NodeMWS and return the response
     *
     * @param $asin
     * @param $price
     * @return FeesResponse
     */
    public function getFees($asin, $price);

    /**
     * Search the catalog and return the response
     *
     * @param $codeType
     * @param $code
     * @return SearchResponse
     */
    public function getSearch($codeType, $code);
}
