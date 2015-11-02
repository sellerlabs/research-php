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
 * Class RelationshipBag
 *
 * @package SellerLabs\Research\Factories
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
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
     * @param $relationships
     */
    public function __construct(array $relationships)
    {
        $this->setParents($relationships['parents']);
        $this->setChildren($relationships['children']);
    }

    /**
     * @param array $parents
     */
    protected function setParents($parents)
    {
        $this->parents = array_map(function ($parent) {
            return new ProductRelationship($parent);
        }, $parents);
    }

    /**
     * @param array $children
     */
    protected function setChildren($children) {
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
