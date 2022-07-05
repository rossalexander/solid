<?php

namespace SRP\Reporting\Output;

class HTMLOutput implements SalesOutputInterface
{
    public function output(float $sales)
    {
        echo '<h1>Sales</h1>';
        echo '<p>$' . $sales . '</p>';
    }
}
