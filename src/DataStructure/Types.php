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

    public static function validate(string $typeName, mixed $data): bool
    {
        $status = false;

        switch ($typeName) {
            case self::NAME_ARRAY:
                $status = is_array($data);
                break;
            case self::NAME_BOOL:
                $status = is_bool($data);
                break;
            case self::NAME_DOUBLE:
                $status = is_double($data);
                break;
            case self::NAME_FLOAT:
                $status = is_float($data);
                break;
            case self::NAME_INT:
                $status = is_int($data);
                break;
            case self::NAME_INTEGER:
                $status = is_integer($data);
                break;
            case self::NAME_LONG:
                $status = is_long($data);
                break;
            case self::NAME_NULL:
                $status = is_null($data);
                break;
            case self::NAME_NUMERIC:
                $status = is_numeric($data);
                break;
            // case self::NAME_OBJECT:
            //     $status = is_object($data);
            //     break;
            case self::NAME_SCALAR:
                $status = is_scalar($data);
                break;
            case self::NAME_STRING:
                $status = is_string($data);
                break;
            default:
                $status = $data instanceof $typeName;
                break;
        }
        return $status;
    }
}
