<?php
/**
 * Created by PhpStorm.
 * Date: 2018/12/10
 * Time: 上午10:44
 */

namespace gybe\captcha\equations;


class SimpleSub
{
    protected static function format($code)
    {
        $a = $code[2] + $code[3] + $code[5] - 1;
        $b = $code[1] + $code[4] + 1;

        return [$a, $b];
    }

    public static function getExpresion($code)
    {
        list($a, $b) = static::format($code);
        return "{$a}-{$b}";
    }

    public static function getValue($code)
    {
        list($a, $b) = static::format($code);
        return $a - $b;
    }

}