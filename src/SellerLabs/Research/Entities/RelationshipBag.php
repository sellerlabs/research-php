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
 * Class RelationshipBag
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Entities
 */
class RelationshipBag
{
    /**
     * @var ProductRelationship[]
     */
    protected $parents = [];

    /**
     * @var ProductRelationship[]
     */
    protected $children = [];

    /**
     * RelationshipBag constructor.
     *
     * @param array $relationships
     */
    public function __construct(array $relationships)
    {
        $parents = Arr::dotGet($relationships, 'parents', []);
        $children = Arr::dotGet($relationships, 'children', []);

        if (is_array($parents) && !$this->isAssoc($parents)) {
            $this->setParents($parents);
        }

        if (is_array($children) && !$this->isAssoc($children)) {
            $this->setChildren($children);
        }
    }

    /**
     * @param array $parents
     */
    protected function setParents(array $parents)
    {
        $this->parents = array_map(function ($parent) {
            return new ProductRelationship($parent);
        }, $parents);
    }

    /**
     * @param array $children
     */
    protected function setChildren(array $children)
    {
        $this->children = array_map(function ($child) {
            return new ProductRelationship($child);
        }, $children);
    }

    /**
     * @return ProductRelationship[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @return ProductRelationship[]
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * Determines if an array is an associative array.
     *
     * @param $array
     *
     * @return bool
     */
    public function isAssoc(array $array)
    {
        return count(
            array_filter(
                array_keys($array),
                'is_string'
            )
        ) > 0;
    }
}
