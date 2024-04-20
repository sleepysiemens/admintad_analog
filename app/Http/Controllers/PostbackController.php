<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostbackController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $requestData = $request->all();
            $cachedData = Cache::get('test', []);
            $cachedData[] = $requestData;
            Cache::put('test', $cachedData);

            return response()->json(['message' => 'Data received and saved.'], 200);
        }

        return response()->json(['message' => 'Method Not Allowed.'], 405);
    }
}
