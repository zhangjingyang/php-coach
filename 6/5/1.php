<?php
class Area
{
    public static function square(int $a, int $b)
    {
        return $a * $b;
    }
}

echo Area::square(3, 4);
