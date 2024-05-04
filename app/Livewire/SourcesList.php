<?php

namespace App\Livewire;

use App\Models\UserSource;
use Livewire\Component;

class SourcesList extends Component
{
    public array $source_cards = [];
    public $sources = [];
    public string $status = 'Всего';

    public function mount()
    {
        if(!auth()->user()->is_admin){
            $this->source_cards = [
                ['title' => 'Всего', 'color' => '66, 135, 245', 'count' => UserSource::query()->where('user_id', auth()->user()->id)->count()],
                ['title' => 'Принят', 'color' => '13, 163, 0', 'count' => UserSource::query()->where('user_id', auth()->user()->id)->where('status','Принят')->count()],
                ['title' => 'Не принят', 'color' => '224, 0, 0', 'count' => UserSource::query()->where('user_id', auth()->user()->id)->where('status','Не принят')->count()],
                ['title' => 'На проверке', 'color' => '224, 213, 0', 'count' => UserSource::query()->where('user_id', auth()->user()->id)->where('status','На проверке')->count()],
            ];

            $this->sources = UserSource::query()->where('user_id', auth()->user()->id)->get();
        }else{
            $this->source_cards = [
                ['title' => 'Всего', 'color' => '66, 135, 245', 'count' => UserSource::query()->count()],
                ['title' => 'Принят', 'color' => '13, 163, 0', 'count' => UserSource::query()->where('status','Принят')->count()],
                ['title' => 'Не принят', 'color' => '224, 0, 0', 'count' => UserSource::query()->where('status','Не принят')->count()],
                ['title' => 'На проверке', 'color' => '224, 213, 0', 'count' => UserSource::query()->where('status','На проверке')->count()],
            ];

            $this->sources = UserSource::query()->get();
        }
    }

    public function filter($status)
    {
        $this->status = $status;

        if($status == 'Всего'){
            $this->mount();
        }else{
            if(!auth()->user()->is_admin){
                $this->sources = UserSource::query()->where('user_id', auth()->user()->id)->where('status', $status)->get();
            }else{
                $this->sources = UserSource::query()->where('status', $status)->get();
            }
        }
    }

    public function change_status(UserSource $source ,$status)
    {
        $source->update(['status' => $status, 'seen' => true]);
        $this->mount();
    }

    public function render()
    {
        return view('livewire.sources-list');
    }
}
