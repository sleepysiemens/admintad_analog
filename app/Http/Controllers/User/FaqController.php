<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function index(): View
    {
        $questions = Question::all();

        return view('pages.dashboard.faq.index', compact('questions'));
    }
}
