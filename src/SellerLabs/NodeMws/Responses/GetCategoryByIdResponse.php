<?php

namespace SellerLabs\NodeMws\Responses;

use GuzzleHttp\Message\ResponseInterface;
use SellerLabs\NodeMws\Entities\CategoryMapping;

class GetCategoryByIdResponse {

    protected $jsonResponse;

    protected $categoryMapping;

    public function __construct(ResponseInterface $response)
    {
        // Parse the JSON into an stdClass object
        $rawResponse = json_decode($response->getBody());

        $this->jsonResponse = $rawResponse;

        $this->parse();
    }

    protected function parse()
    {
        $this->categoryMapping = new CategoryMapping($this->jsonResponse);
    }

    /**
     * Get the category mapping returned
     *
     * @return mixed
     */
    public function getCategoryMapping()
    {
        return $this->categoryMapping;
    }

    /**
     * Get the category id associated with this response
     *
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->getCategoryMapping()->getCategoryId();
    }

    /**
     * Get the category associated with this response
     *
     * @return mixed
     */
    public function getCategory()
    {
        return $this->getCategoryMapping()->getCategory();
    }
}