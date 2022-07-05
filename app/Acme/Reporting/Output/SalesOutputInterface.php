<?php

namespace Acme\Reporting\Output;

interface SalesOutputInterface
{
    public function output(float $sales);
}
