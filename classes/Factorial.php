<?php
namespace Lab;

class Factorial
{
    public static function factNum($num)
    {
        if ($num < 0 || is_double($num) || !is_numeric($num)) {
            return null;
        } else {
            $factorial = 1;
            for ($x = $num; $x >= 1; $x--) {
                $factorial = $factorial * $x;
            }
            return $factorial;
        }
    }
}