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

use WBW\Library\Types\Exception\FloatArgumentException;

/**
 * Float helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Types\Helper
 */
class FloatHelper {

    /**
     * Determines if a value is a float.
     *
     * @param mixed $value The value.
     * @return void
     * @throws FloatArgumentException Throws a Float argument exception if the value is not of expected type.
     */
    public static function isFloat($value): void {
        if (false === is_float($value)) {
            throw new FloatArgumentException($value);
        }
    }

    /**
     * Parse a string.
     *
     * @param string|null $value The string value.
     * @return float|null Returns the float in case of success, null otherwise.
     * @throws FloatArgumentException Throws a float argument exception if the string value does not represent a float.
     */
    public static function parseString(?string $value): ?float {

        if (null === $value) {
            return null;
        }

        if (0 === preg_match("/^-?[0-9]+(\.[0-9]*)?$/", $value)) {
            throw new FloatArgumentException($value);
        }

        return floatval($value);
    }
}
