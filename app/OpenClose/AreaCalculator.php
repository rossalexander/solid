<?php

namespace OpenClose;

class AreaCalculator
{
    public function calculate($squares): float|int
    {
        $area = [];
        foreach ($squares as $square) {
            $area[] = $square->height * $square->width;
        }
        return array_sum($area);
    }
}
