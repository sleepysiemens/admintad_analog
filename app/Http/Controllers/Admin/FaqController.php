<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function index(): View
    {
        $questions = Question::all();

        return view('pages.dashboard.faq.index', compact('questions'));
    }

    public function create(): View
    {
        return view('pages.dashboard.faq.create');
    }

    public function store(): RedirectResponse
    {
        Question::query()->create(['question' => request()->question, 'answer' => request()->answer]);

        return redirect()->route('admin.faq.index');
    }

    public function delete(Question $question): RedirectResponse
    {
        $question->delete();

        return redirect()->route('admin.faq.index');
    }
}
