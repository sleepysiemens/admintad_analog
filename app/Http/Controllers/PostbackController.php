<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostbackController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
            $requestData = $request->all();
            $cachedData = json_decode(Cache::get('test'));
            $cachedData[] = $requestData;
            Cache::put('test', json_encode($cachedData));

            return response()->json(['message' => 'Data received and saved.'], 200);
        }

        return response()->json(['message' => 'Method Not Allowed.'], 405);
    }
}
