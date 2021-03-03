<?php
/**
 * @license MIT
 * @author hazuki3417<hazuki3417@gmail.com>
 * @copyright 2021 hazuki3417 all rights reserved.
 */

namespace Selen\DataStructure;

class Types
{
    const NAME_ARRAY   = 'array';
    const NAME_BOOL    = 'bool';
    const NAME_DOUBLE  = 'double';
    const NAME_FLOAT   = 'float';
    const NAME_INT     = 'int';
    const NAME_INTEGER = 'integer';
    const NAME_LONG    = 'long';
    const NAME_NULL    = 'null';
    const NAME_NUMERIC = 'numeric';
    // const NAME_OBJECT  = 'object';
    const NAME_SCALAR  = 'scalar';
    const NAME_STRING  = 'string';

    public static function validate($typeName, $data): bool
    {
        switch (true) {
            case $typeName === self::NAME_ARRAY:
                return is_array($data);
            case $typeName === self::NAME_BOOL:
                return is_bool($data);
            case $typeName === self::NAME_DOUBLE:
                return is_double($data);
            case $typeName === self::NAME_FLOAT:
                return is_float($data);
            case $typeName === self::NAME_INT:
                return is_int($data);
            case $typeName === self::NAME_INTEGER:
                return is_integer($data);
            case $typeName === self::NAME_LONG:
                return is_long($data);
            case $typeName === self::NAME_NULL:
                return is_null($data);
            case $typeName === self::NAME_NUMERIC:
                return is_numeric($data);
            // case $typeName === self::NAME_OBJECT:
            //     return is_object($data);
            case $typeName === self::NAME_SCALAR:
                return is_scalar($data);
            case $typeName === self::NAME_STRING:
                return is_string($data);
            default:
                break;
        }
        return $data instanceof $typeName;
    }
}
