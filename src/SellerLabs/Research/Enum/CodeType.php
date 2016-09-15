<?php

namespace SellerLabs\Research\Enum;

use SellerLabs\Nucleus\Support\Enum;

/**
 * Class CodeType
 *
 * @author Eduardo Trujillo <ed@sellerlabs.com>
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
