<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.profile.index');
    }

    public function update(Request $request)
    {
        $data = $request->all();
        unset($data['_token'], $data['_method']);

        $profile = User::query()->where('id', auth()->user()->id);
        $profile->update($data);

        return redirect()->route('user.profile.index');
    }
}
