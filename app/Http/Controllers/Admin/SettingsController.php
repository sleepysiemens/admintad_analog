<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SettingsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public SettingsService $settingsService;
    public function __construct(SettingsService $settingsService)
    {
        $this->settingsService=$settingsService;
    }
    public function index(): View
    {
        $offer_rules = $this->settingsService->get_by_title('offer_rules');
        $traffic_sources = $this->settingsService->get_by_title('traffic_sources');

        return view('pages.dashboard.settings.index', compact(['offer_rules', 'traffic_sources']));
    }

    public function save(Request $request): RedirectResponse
    {
        foreach ($request->text as $key => $value)
        {
            $this->settingsService->update($key, $value);
        }

        return redirect()->route('admin.settings.index');
    }
}
