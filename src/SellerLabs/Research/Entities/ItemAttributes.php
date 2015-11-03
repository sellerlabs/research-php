<?php

/**
 * Copyright 2014-2015, SellerLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Snagshout package
 */

namespace SellerLabs\Research\Entities;

use Chromabits\Nucleus\Support\Arr;

/**
 * Class ItemAttributes
 *
 * @package SellerLabs\Research\Entities
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 */
class ItemAttributes extends BaseEntity
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * ItemAttributes constructor.
     *
     * @param array $raw
     */
    public function __construct(array $raw)
    {
        parent::__construct($raw);

        foreach ($raw as $key => $val) {

            $this->attributes[$key] = $val;
        }
    }

    /**
     * Get an arbitrary attribute from this item attributes set.
     *
     * @param $key
     *
     * @return mixed
     */
    public function attr($key)
    {
        return Arr::dotGet($this->attributes, ucfirst($key));
    }

    /**
     * Get an attribute or property (shorthand)
     *
     * @param string $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        if ($name == 'attributes') {
            return $this->attributes;
        }

        return $this->attr($name);
    }
}
