<?php

namespace OpenClose;

class Square
{
    public int $height;
    public int $width;

    function __construct(int $height, int $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
}
