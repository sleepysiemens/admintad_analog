<?php

namespace App\Http\Controllers;

use App\Services\StatisticService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostbackController extends Controller
{
    public $statisticService;
    public function __construct(StatisticService $statisticService)
    {
        $this->statisticService = $statisticService;
    }
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->statisticService->update_statistic($request->all());

            return response()->json(['message' => 'Data received and saved.'], 200);
        }

        return response()->json(['message' => 'Method Not Allowed.'], 405);
    }
}
