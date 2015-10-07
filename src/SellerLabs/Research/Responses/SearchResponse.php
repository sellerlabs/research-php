<?php

namespace SellerLabs\Research\Responses;

use SellerLabs\Research\Entities\SearchProduct;

/**
 * Class SearchResponse
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Responses
 */
class SearchResponse extends BaseResponse
{
    /**
     * Hold each product returned from the search
     *
     * @var SearchProduct[]
     */
    protected $searchProducts;

    /**
     * Get the search products from a NodeMws response.
     *
     * @return SearchProduct[]
     */
    public function getSearchProducts()
    {
        return $this->searchProducts;
    }

    /**
     * @param SearchProduct[] $searchProducts
     */
    public function setSearchProducts($searchProducts)
    {
        $this->searchProducts = $searchProducts;
    }

    /**
     * Check if a SearchResponse gives back no products.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->searchProducts);
    }

    /**
     * Return the first product returned from a search query.
     *
     * @return SearchProduct
     */
    public function first()
    {
        if (!empty($this->searchProducts)) {
            return $this->searchProducts[0];
        }

        return null;
    }
}
