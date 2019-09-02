<?php
function recursive(int $num): int
{
    $result = 1;
    if ($num == 1) {
        return $result * 1;
    } else {
        return $result = $num * recursive($num - 1);
    }
}

echo recursive(5);
