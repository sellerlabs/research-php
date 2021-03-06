<?php

namespace SellerLabs\Research\Interfaces;

use SellerLabs\Research\Factories\ItemSearchResponseFactory;
use SellerLabs\Research\Responses\FeesResponse;
use SellerLabs\Research\Responses\GetAsinCategoriesResponse;
use SellerLabs\Research\Responses\GetCategoryByIdResponse;
use SellerLabs\Research\Responses\ItemSearchResponse;
use SellerLabs\Research\Responses\OffersResponse;
use SellerLabs\Research\Responses\SearchResponse;

/**
 * Interface ResearchClientInterface
 *
 * Represents an object capable of querying SellerLabs' Research API
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Interfaces
 */
interface ResearchClientInterface
{
    /**
     * Generate an authorization code for NodeMWS
     *
     * @param null|int $timestamp
     *
     * @return string
     */
    public function generateCode($timestamp = null);

    /**
     * Get the current offers for an ASIN from NodeMWS
     *
     * @param string $asin
     * @param bool $noPaapi
     *
     * @return OffersResponse
     */
    public function getOffers($asin, $noPaapi = false);

    /**
     * Call the fees endpoint of NodeMWS and return the response
     *
     * @param string $asin
     * @param float $price
     *
     * @return FeesResponse
     */
    public function getFees($asin, $price);

    /**
     * Search the catalog and return the response
     *
     * @param string $idType
     * @param string $idCode
     *
     * @return SearchResponse
     */
    public function getSearch($idType, $idCode);

    /**
     * Get categories for an ASIN
     *
     * @param string $asin
     *
     * @return GetAsinCategoriesResponse
     */
    public function getAsinCategories($asin);

    /**
     * Get a category by ID
     *
     * @param string $categoryId
     *
     * @return GetCategoryByIdResponse
     */
    public function getCategoryById($categoryId);

    /**
     * Hit the itemSearch endpoint of research-api with a given keyword
     * phrase, page (default 1) and search index (default Blended)
     *
     * @param string $keywords
     * @param int $page
     * @param string $searchIndex
     *
     * @return ItemSearchResponse
     */
    public function getItemSearch(
        $keywords,
        $page = 1,
        $searchIndex = 'Blended'
    );
}
