<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function (\Illuminate\Http\Request $request) {

    $factory = substr($request->vin, 0, 3);
    $body = substr($request->vin, 3, 1) . substr($request->vin, 9, 1);
    $constant = substr($request->vin, 4, 2);
    $geo = substr($request->vin, 6, 2);
    $model = substr($request->vin, 8, 1);
    $year = substr($request->vin, 10, 1);
    $month = substr($request->vin, 11, 1);
    $number = substr($request->vin, 12, 5);


    return view('welcome', compact('factory', 'body', 'constant', 'geo', 'model', 'year', 'month', 'number'));
});
