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

use SellerLabs\Research\Enum\CodeType;

/**
 * Class ProductRelationship
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Entities
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
     *
     * @param array $relationship
     */
    public function __construct($relationship)
    {
        foreach ($relationship as $key => $rel) {
            if ($key == CodeType::TYPE_ASIN) {
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
