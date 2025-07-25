<?php

namespace App\Livewire;

use App\Models\Question;
use Illuminate\View\View;
use Livewire\Component;

class FaqBlock extends Component
{
    public bool $is_visible = false;

    public int $question_id = 0;

    public function toggle_question(): void
    {
        $this->is_visible = !$this->is_visible;
    }

    public function mount($question_id): void
    {
        $this->question_id = $question_id;
    }

    public function render(): View
    {
        $question = Question::query()->where('id', $this->question_id)->first();

        return view('livewire.faq-block', compact('question'));
    }
}
