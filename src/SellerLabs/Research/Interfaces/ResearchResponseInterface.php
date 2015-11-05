<?php

namespace SellerLabs\Research\Interfaces;

use Psr\Http\Message\ResponseInterface;

/**
 * Interface ResearchResponseInterface
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @package SellerLabs\Research\Interfaces
 */
interface ResearchResponseInterface
{
    /**
     * @return null|ResponseInterface
     */
    public function getInnerResponse();
}