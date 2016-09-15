<?php

namespace SellerLabs\Research\Entities;

use SellerLabs\Nucleus\Exceptions\LackOfCoffeeException;
use SellerLabs\Nucleus\Foundation\BaseObject;
use SellerLabs\Nucleus\Support\Arr;

/**
 * Class BaseEntity
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
 * @package SellerLabs\Research\Entities
 */
abstract class BaseEntity extends BaseObject
{
    /**
     * Initial array mapping of raw attributes
     *
     * @var array
     */
    protected $raw;

    /**
     * Construct a new BaseEntity from raw array data
     *
     * @param array $raw
     *
     * @throws LackOfCoffeeException
     */
    public function __construct(array $raw = [])
    {
        parent::__construct();

        $this->raw = $raw;
    }

    /**
     * Safely get a key from the raw response
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    protected function get($key, $default = null)
    {
        return Arr::dotGet($this->raw, $key, $default);
    }
}
