<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;

class FaqController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        $questions = Question::all();
        return view('pages.dashboard.faq.index', compact('questions'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        return view('pages.dashboard.faq.create');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        Question::create(['question' => request()->question, 'answer' => request()->answer]);

        return redirect()->route('admin.faq.index');
    }

    /**
     * @param Question $question
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Question $question)
    {
        $question->delete();
        return redirect()->route('admin.faq.index');
    }
}
