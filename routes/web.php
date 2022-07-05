<?php

use SRP\Reporting\Output\HTMLOutput;
use SRP\Reporting\Output\JSONOutput;
use SRP\Reporting\SalesReporter;
use SRP\Repositories\SalesRepository;
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

    $report = new SalesReporter(new SalesRepository);

    $begin = Carbon\Carbon::now()->subDays(10);
    $end = Carbon\Carbon::now();

    return $report->between($begin, $end, new HTMLOutput);
});
