<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Question;

class FaqController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('pages.dashboard.faq.index', compact('questions'));
    }
}
