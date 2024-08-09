<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VinController extends Controller
{
    public function explodeVin(Request $request)
    {
        $factory = substr($code, 0, 3);
        $body = substr($code, 3, 1) . substr($code, 9, 1);
        $constant = substr($code, 4, 2);
        $geo = substr($code, 6, 2);
        $model = substr($code, 8, 1);
        $year = substr($code, 10, 1);
        $month = substr($code, 11, 1);
        $number = substr($code, 12, 5);

        return compact('factory', 'body', 'constant', 'geo', 'model', 'year', 'month', 'number');
    }
}
