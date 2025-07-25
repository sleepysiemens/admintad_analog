<?php

namespace App\Livewire;

use App\Models\NewsPost;
use Illuminate\View\View;
use Livewire\Component;

class DashboardNews extends Component
{
    public bool $show_personal = false;

    public function change_show(bool $value): void
    {
        $this->show_personal = $value;
    }

    public function render(): View
    {
        if ($this->show_personal) {
            $news = NewsPost::query()
                ->join('user_offers','user_offers.offer_id','news_posts.offer_id')
                ->where('user_offers.user_id','=',auth()->user()->id)
                ->select('news_posts.*')
                ->orderBy('news_posts.created_at', 'desc')
                ->limit(10)
                ->get();
        } else {
            $news = NewsPost::query()->limit(10)->get();
        }

        return view('livewire.dashboard-news', compact('news'));
    }
}
