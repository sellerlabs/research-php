<?php

namespace SellerLabs\Research\Interfaces;

use SellerLabs\Research\Entities\BaseEntity;

/**
 * Interface EntityFactoryInterface
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\Research\Interfaces
 */
interface EntityFactoryInterface
{
    /**
     * Build an entity from an properties array.
     *
     * @param array $input
     *
     * @return BaseEntity
     */
    public function makeFromArray(array $input);
}