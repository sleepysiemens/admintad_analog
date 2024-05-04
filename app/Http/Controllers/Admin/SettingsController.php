<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Offer;
use App\Models\UserOffer;
use App\Services\SettingsService;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public $settingsService;
    public function __construct(SettingsService $settingsService)
    {
        $this->settingsService=$settingsService;
    }
    public function index()
    {
        $offer_rules=$this->settingsService->get_by_title('offer_rules');
        $traffic_sources=$this->settingsService->get_by_title('traffic_sources');

        return view('pages.dashboard.settings.index', compact(['offer_rules', 'traffic_sources']));
    }

    public function save(Request $request)
    {
        foreach ($request->text as $key => $value)
        {
            $this->settingsService->update($key, $value);
        }
        return redirect()->route('admin.settings.index');
    }
}
