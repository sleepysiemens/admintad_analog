<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostbackController extends Controller
{
    public function index(Request $request)
    {
        $test=json_decode(Cache::get('test'));
        $test[]=$request;
        $test[]='/';
        Cache::put('test', json_encode($test));
    }
}
