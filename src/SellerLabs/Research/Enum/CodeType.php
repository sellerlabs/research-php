<?php

namespace SellerLabs\Research\Enum;

use Chromabits\Nucleus\Support\Enum;

/**
 * Class CodeType
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package SellerLabs\Research\Enum
 */
class CodeType extends Enum
{
    const TYPE_ASIN = 'asin';
    const TYPE_UPC = 'upc';
    const TYPE_EAN = 'ean';
    const TYPE_ISBN = 'isbn';
    const TYPE_KEYWORD = 'keyword';
}