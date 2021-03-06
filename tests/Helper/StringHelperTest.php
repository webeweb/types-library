<?php

/*
 * This file is part of the types-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Helper;

use WBW\Library\Types\Helper\StringHelper;
use WBW\Library\Types\Tests\AbstractTestCase;

/**
 * String helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Types\Tests\Helper
 */
class StringHelperTest extends AbstractTestCase {

    /**
     * Tests the domNode() method.
     *
     * @return void
     */
    public function testDomNode(): void {

        $arg = ["type" => "text/javascript"];
        $res = file_get_contents(__DIR__ . "/StringHelperTest.testDomNode.html.txt");
        $this->assertEquals($res, StringHelper::domNode("script", "\n    $(document).ready(function() {});\n", $arg) . "\n");
    }

    /**
     * Tests the domNode() method.
     *
     * @return void
     */
    public function testDomNodeWithShortTag(): void {

        $arg = ["type" => "text/javascript"];
        $res = '<script type="text/javascript"/>';
        $this->assertEquals($res, StringHelper::domNode("script", null, $arg, true));
    }

    /**
     * Tests the fileSize() method.
     *
     * @return void
     */
    public function testFileSize(): void {

        $this->assertEquals("", StringHelper::fileSize(null));
        $this->assertEquals("", StringHelper::fileSize(-1));
        $this->assertEquals("", StringHelper::fileSize(1, -1));

        $this->assertRegExp("/^1[\.,]00 Kio$/", StringHelper::fileSize(1024));
        $this->assertRegExp("/^1[\.,]00 Mio$/", StringHelper::fileSize(1048576));
        $this->assertRegExp("/^1[\.,]00 Gio$/", StringHelper::fileSize(1073741842));
        $this->assertRegExp("/^1[\.,]00 Tio$/", StringHelper::fileSize(1099511627776));

        $this->assertRegExp("/^1[\.,]000 Tio$/", StringHelper::fileSize(1099511627776, 3));
    }

    /**
     * Tests the parseArray() method.
     *
     * @return void
     */
    public function testParseArray(): void {

        $arg = ["exception" => null, "id" => "id", "class" => ["class1", "class2", "class3   class4"]];
        $res = 'id="id" class="class1 class2 class3 class4"';
        $this->assertEquals($res, StringHelper::parseArray($arg));
    }

    /**
     * Tests the parseBoolean() method.
     *
     * @return void
     */
    public function testParseBoolean(): void {

        $this->assertEquals("false", StringHelper::parseBoolean(null));
        $this->assertEquals("false", StringHelper::parseBoolean(false));
        $this->assertEquals("true", StringHelper::parseBoolean(true));
    }

    /**
     * Tests the removeAccents() method.
     *
     * @return void
     */
    public function testRemoveAccents(): void {

        $this->assertEquals("a", StringHelper::removeAccents("??"));
        $this->assertEquals("a", StringHelper::removeAccents("??"));
        $this->assertEquals("a", StringHelper::removeAccents("??"));
        $this->assertEquals("a", StringHelper::removeAccents("??"));
        $this->assertEquals("a", StringHelper::removeAccents("??"));
        $this->assertEquals("c", StringHelper::removeAccents("??"));
        $this->assertEquals("e", StringHelper::removeAccents("??"));
        $this->assertEquals("e", StringHelper::removeAccents("??"));
        $this->assertEquals("e", StringHelper::removeAccents("??"));
        $this->assertEquals("e", StringHelper::removeAccents("??"));
        $this->assertEquals("i", StringHelper::removeAccents("??"));
        $this->assertEquals("i", StringHelper::removeAccents("??"));
        $this->assertEquals("i", StringHelper::removeAccents("??"));
        $this->assertEquals("i", StringHelper::removeAccents("??"));
        $this->assertEquals("n", StringHelper::removeAccents("??"));
        $this->assertEquals("o", StringHelper::removeAccents("??"));
        $this->assertEquals("o", StringHelper::removeAccents("??"));
        $this->assertEquals("o", StringHelper::removeAccents("??"));
        $this->assertEquals("o", StringHelper::removeAccents("??"));
        $this->assertEquals("o", StringHelper::removeAccents("??"));
        $this->assertEquals("u", StringHelper::removeAccents("??"));
        $this->assertEquals("u", StringHelper::removeAccents("??"));
        $this->assertEquals("u", StringHelper::removeAccents("??"));
        $this->assertEquals("u", StringHelper::removeAccents("??"));
        $this->assertEquals("y", StringHelper::removeAccents("??"));
        $this->assertEquals("y", StringHelper::removeAccents("??"));
        $this->assertEquals("A", StringHelper::removeAccents("??"));
        $this->assertEquals("A", StringHelper::removeAccents("??"));
        $this->assertEquals("A", StringHelper::removeAccents("??"));
        $this->assertEquals("A", StringHelper::removeAccents("??"));
        $this->assertEquals("A", StringHelper::removeAccents("??"));
        $this->assertEquals("C", StringHelper::removeAccents("??"));
        $this->assertEquals("E", StringHelper::removeAccents("??"));
        $this->assertEquals("E", StringHelper::removeAccents("??"));
        $this->assertEquals("E", StringHelper::removeAccents("??"));
        $this->assertEquals("E", StringHelper::removeAccents("??"));
        $this->assertEquals("I", StringHelper::removeAccents("??"));
        $this->assertEquals("I", StringHelper::removeAccents("??"));
        $this->assertEquals("I", StringHelper::removeAccents("??"));
        $this->assertEquals("I", StringHelper::removeAccents("??"));
        $this->assertEquals("N", StringHelper::removeAccents("??"));
        $this->assertEquals("O", StringHelper::removeAccents("??"));
        $this->assertEquals("O", StringHelper::removeAccents("??"));
        $this->assertEquals("O", StringHelper::removeAccents("??"));
        $this->assertEquals("O", StringHelper::removeAccents("??"));
        $this->assertEquals("O", StringHelper::removeAccents("??"));
        $this->assertEquals("U", StringHelper::removeAccents("??"));
        $this->assertEquals("U", StringHelper::removeAccents("??"));
        $this->assertEquals("U", StringHelper::removeAccents("??"));
        $this->assertEquals("U", StringHelper::removeAccents("??"));
        $this->assertEquals("Y", StringHelper::removeAccents("??"));
    }
}
