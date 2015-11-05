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
 * Class AvailabilityAttributes
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Entities
 */
class AvailabilityAttributes extends BaseEntity
{
    /**
     * @var string
     */
    public $availabilityType;

    /**
     * @var int
     */
    public $minimumHours;

    /**
     * @var int
     */
    public $maximumHours;

    /**
     * AvailabilityAttributes constructor.
     *
     * @param array $raw
     */
    public function __construct(array $raw = [])
    {
        parent::__construct($raw);

        $this->availabilityType = $this->get('AvailabilityType');
        $this->minimumHours = (int) $this->get('MinimumHours') ?: null;
        $this->maximumHours = (int) $this->get('MaximumHours') ?: null;
    }
}
