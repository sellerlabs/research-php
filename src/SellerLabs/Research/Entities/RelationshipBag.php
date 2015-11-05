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
        $this->setParents(Arr::dotGet($relationships, 'parents'));
        $this->setChildren(Arr::dotGet($relationships, 'children'));
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
}
