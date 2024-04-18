<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;


class TestController extends Controller
{
    public function index()
    {
        if (Cache::has('test'))
            dd(Cache::get('test'));
    }
}
