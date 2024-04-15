<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Offer;
use App\Models\UserOffer;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $offer_rules=Content::query()->where('title','=','Правила офферов')->first();

        return view('pages.admin.settings.index', compact('offer_rules'));
    }

    public function save(Request $request)
    {
        if(isset($request->offer_rules))
        {
            $offer_rules=Content::query()->where('title','=','Правила офферов')->first();

            if($offer_rules!=null)
            {
                $offer_rules->update(['text'=>$request->offer_rules]);
            }
            else
            {
                Content::create(['title'=>'Правила офферов', 'text'=>$request->offer_rules]);
            }
        }

        return redirect()->route('admin.settings.index');
    }
}
