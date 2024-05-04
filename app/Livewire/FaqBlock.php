<?php

namespace App\Livewire;

use App\Models\Question;
use Livewire\Component;

class FaqBlock extends Component
{
    /**
     * @var bool
     */
    public bool $is_visible = false;

    /**
     * @var int
     */
    public int $question_id = 0;

    /**
     * @return Void
     */
    public function toggle_question(): Void
    {
        $this->is_visible = !$this->is_visible;
    }

    /**
     * @param $question_id
     * @return void
     */
    public function mount($question_id): Void
    {
        $this->question_id = $question_id;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function render()
    {
        $question = Question::query()->where('id', $this->question_id)->first();
        return view('livewire.faq-block', compact('question'));
    }
}
