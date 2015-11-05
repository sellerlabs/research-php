<?php

/**
 * Copyright 2014-2015, SellerLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Snagshout package
 */

namespace SellerLabs\Research\Factories;

use SellerLabs\Research\Entities\BaseEntity;

/**
 * Class ItemLink
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Factories
 */
class ItemLink extends BaseEntity
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $url;

    /**
     * ItemLink constructor.
     *
     * @param array $link
     */
    public function __construct(array $link)
    {
        parent::__construct($link);

        $this->description = $this->get('Description');
        $this->url = $this->get('URL');
    }
}
