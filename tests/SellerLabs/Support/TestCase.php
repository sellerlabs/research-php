<?php

namespace Tests\SellerLabs\Support;

use Mockery;
use PHPUnit_Framework_TestCase;

/**
 * Class TestCase
 *
 * Base test case for all other test cases in the library
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Tests\SellerLabs\Support
 */
class TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * Finish testing. Clean up
     */
    public function tearDown()
    {
        Mockery::close();
    }
}
