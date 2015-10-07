<?php

namespace SellerLabs\Research\Enum;

use Chromabits\Nucleus\Support\Enum;

/**
 * Class FeesSetType
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\Research\Enum
 */
class FeesSetType extends Enum
{
    const TYPE_FBA = 'fba';
    const TYPE_MERCHANT_FULFILLED = 'mfn';
}