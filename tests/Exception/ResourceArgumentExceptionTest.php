<?php

/*
 * This file is part of the types-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Exception;

use WBW\Library\Types\Exception\ResourceArgumentException;
use WBW\Library\Types\Tests\AbstractTestCase;

/**
 * Resource argument exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Types\Tests\Exception
 */
class ResourceArgumentExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $ex = new ResourceArgumentException("exception");

        $res = 'The argument "exception" is not a resource';
        $this->assertEquals($res, $ex->getMessage());
    }
}
