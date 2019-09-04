<?php
class Area
{
    const PIE = 3.14;
    public static function square(int $a, int $b)
    {
        return $a * $b;
    }
    public static function circle(float $r)
    {
        return self::PIE * $r * $r;
    }
}

echo Area::circle(2);
