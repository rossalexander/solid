<?php

/**
 * Separate extensible behavior behind an interface and flip the dependencies.
 */

namespace OpenClose;

class AreaCalculator
{
    public function calculate(Shape $shapes): float|int
    {
        $area = [];
        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }
        return array_sum($area);
    }
}
