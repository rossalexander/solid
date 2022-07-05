<?php

namespace OpenClose;

class Circle implements Shape
{
    public float $radius;

    function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function area(): float|int
    {
        return $this->radius * $this->radius * pi();
    }
}
