<?php

namespace Acme\Reporting\Output;

class JSONOutput implements SalesOutputInterface
{
    public function output(float $sales)
    {
        echo json_encode(['sales' => $sales]);
    }
}
