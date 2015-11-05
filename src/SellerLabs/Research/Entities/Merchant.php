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
 * Class Merchant
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Entities
 */
class Merchant extends BaseEntity
{
    /**
     * @var string
     */
    public $name;

    /**
     * Merchant constructor.
     *
     * @param array $raw
     */
    public function __construct(array $raw = [])
    {
        parent::__construct($raw);

        $this->name = $this->get('Name');
    }
}
