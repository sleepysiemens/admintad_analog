<?php

namespace App\Http\Controllers;

use App\Services\StatisticService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostbackController extends Controller
{
    public StatisticService $statisticService;
    public function __construct(StatisticService $statisticService)
    {
        $this->statisticService = $statisticService;
    }

    public function index(Request $request): JsonResponse
    {
        if ($request->isMethod('get')) {
            $this->statisticService->update_statistic($request->all());

            return response()->json(['message' => 'Data received and saved.'], 200);
        }

        return response()->json(['message' => 'Method Not Allowed.'], 405);
    }
}
