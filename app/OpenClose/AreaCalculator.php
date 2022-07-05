<?php

namespace OpenClose;

class AreaCalculator
{
    public function calculate($shapes): float|int
    {
        $area = [];

        foreach ($shapes as $shape) {
            if (is_a($shape, Square::class)) {
                $area[] = $shape->height * $shape->width;
            } else {
                $area[] = $shape->radius * $shape->radius * pi();
            }
        }

        return array_sum($area);
    }
}
