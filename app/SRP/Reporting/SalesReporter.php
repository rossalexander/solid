<?php

namespace SRP\Reporting;

use SRP\Reporting\Output\SalesOutputInterface;
use SRP\Repositories\SalesRepository;

class SalesReporter
{
    private SalesRepository $repository;

    public function __construct(SalesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function between($startDate, $endDate, SalesOutputInterface $formatter): void
    {
        // get sales from database
        $sales = $this->repository->between($startDate, $endDate);

        // return results
        $formatter->output($sales);
    }
}
