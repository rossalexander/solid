<?php

namespace OpenClose;

class Square implements Shape
{
    public int $height;
    public int $width;

    function __construct(int $height, int $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area(): float|int
    {
        return $this->height * $this->width;
    }
}
