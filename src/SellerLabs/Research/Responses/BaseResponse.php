<?php

namespace SellerLabs\Research\Responses;

use Chromabits\Nucleus\Foundation\BaseObject;
use Psr\Http\Message\ResponseInterface;
use SellerLabs\Research\Interfaces\ResearchResponseInterface;

/**
 * Class BaseResponse
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\Research\Responses
 */
class BaseResponse extends BaseObject implements ResearchResponseInterface
{
    /**
     * @var null|ResponseInterface
     */
    protected $innerResponse;

    /**
     * Construct an instance of a BaseResponse.
     */
    public function __construct()
    {
        parent::__construct();

        $this->innerResponse = null;
    }

    /**
     * @return null|ResponseInterface
     */
    public function getInnerResponse()
    {
        return $this->innerResponse;
    }

    /**
     * @param null|ResponseInterface $innerResponse
     */
    public function setInnerResponse(ResponseInterface $innerResponse)
    {
        $this->innerResponse = $innerResponse;
    }
}