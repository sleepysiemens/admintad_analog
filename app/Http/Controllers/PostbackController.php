<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostbackController extends Controller
{
    public function index(Request $request)
    {
        $test=Cache::get('test');
        $test[]=$request;
        Cache::put('test', $test);
    }
}
