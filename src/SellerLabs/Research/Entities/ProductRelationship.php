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

/**
 * Class ProductRelationship
 *
 * @package SellerLabs\Research\Entities
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 */
class ProductRelationship
{
    /**
     * @var array
     */
    protected $properties = [];

    /**
     * @var string
     */
    protected $asin;

    /**
     * ProductRelationship constructor.
     * @param $relationship
     * @internal param $parent
     */
    public function __construct($relationship)
    {
        foreach ($relationship as $key => $rel) {
            if ($key == 'asin') {
                $this->asin = $rel;
            } else {
                $this->properties[$key] = $rel;
            }
        }
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @return string
     */
    public function getAsin()
    {
        return $this->asin;
    }
}
