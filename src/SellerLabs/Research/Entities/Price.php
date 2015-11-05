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
 * Class Price
 *
 * @author Benjamin Kovach <benjamin@roundsphere.com>
 * @package SellerLabs\Research\Entities
 */
class Price extends BaseEntity
{
    /**
     * @var null|int
     */
    public $amount;

    /**
     * @var string
     */
    public $currencyCode;

    /**
     * @var string
     */
    public $formattedPrice;

    /**
     * Price constructor.
     *
     * @param array $raw
     */
    public function __construct(array $raw)
    {
        parent::__construct($raw);

        $this->amount = ((int) $this->get('Amount')) ?: null;
        $this->currencyCode = $this->get('CurrencyCode');
        $this->formattedPrice = $this->get('FormattedPrice');
    }
}
