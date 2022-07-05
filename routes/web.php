<?php

use Acme\Reporting\Output\HTMLOutput;
use Acme\Reporting\Output\JSONOutput;
use Acme\Repositories\SalesRepository;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// A class should one and only one responsibility.
Route::get('/sales', function () {
//    if(Auth::check()) {
//        return view('sales');
//    } else {
//        return redirect('/login');
//    }

    $report = new Acme\Reporting\SalesReporter(new SalesRepository);

    $begin = Carbon\Carbon::now()->subDays(10);
    $end = Carbon\Carbon::now();

    return $report->between($begin, $end, new HTMLOutput);
});
