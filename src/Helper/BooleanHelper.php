<?php

/*
 * This file is part of the types-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Helper;

use WBW\Library\Types\Exception\BooleanArgumentException;

/**
 * Boolean helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Types\Helper
 */
class BooleanHelper {

    /**
     * Determines if a value is a boolean.
     *
     * @param mixed $value The value.
     * @return void
     * @throws BooleanArgumentException Throws a Boolean argument exception if the value is not of expected type.
     */
    public static function isBoolean($value): void {
        if (false === is_bool($value)) {
            throw new BooleanArgumentException($value);
        }
    }

    /**
     * Parse a string.
     *
     * @param string|null $value The string value.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function parseString(?string $value): bool {

        if (null === $value) {
            return false;
        }

        switch (strtolower($value)) {
            case "1":
            case "o":
            case "ok":
            case "oui":
            case "true":
            case "y":
            case "yes":
                return true;
        }

        return false;
    }
}
