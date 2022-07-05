<?php namespace Acme\Reporting;

use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SalesReporter
{
    /**
     * @throws Exception
     * @throws Exception
     */
    public function between($startDate, $endDate)
    {
        // perform authentication
//        if (!Auth::check()) throw new Exception('You are not authenticated');

        // get sales from database
        $sales = $this->queryDBForSalesBetween($startDate, $endDate);

        // return results
        return $this->format($sales);
    }

    protected function queryDBForSalesBetween($startDate, $endDate)
    {
        // query database
        return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }

    protected function format($sales)
    {
        // format results
        return "<h1>Sales: $sales</h1>";
    }
}
