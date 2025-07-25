<?php

namespace App\Livewire;

use App\Models\Offer;
use Illuminate\View\View;
use Livewire\Component;

class OffersList extends Component
{
    public string $key = '';

    public array $country = [];

    public array $source = [];
    public int $price_from = 0;
    public int $cost_from = 0;
    public int $price_to = 10000;
    public int $cost_to = 10000;


    public bool $show_filters = false;
    public bool $show_countries = false;
    public bool $show_price = false;
    public bool $show_cost = false;
    public bool $show_source = false;

    public function search($key): void
    {
        $this->key = $key;
    }

    public function filters(): void
    {
        $this->show_filters = ! $this->show_filters;

        $this->show_countries = false;
        $this->show_price = false;
        $this->show_cost = false;
        $this->show_source = false;
    }

    public function dropdown($section): void
    {
        switch ($section) {
            case 'countries':
                $this->show_countries = ! $this->show_countries;

                break;
            case 'price':
                $this->show_price = ! $this->show_price;

                break;
            case 'cost':
                $this->show_cost = ! $this->show_cost;

                break;
            case 'source':
                $this->show_source = ! $this->show_source;

                break;
        }
    }

    public function filter($value, $method): void
    {
        switch ($method){
            case 'price_from':
                if($value){
                    $this->price_from = $value;
                } else {
                    $this->price_from = 0;
                }

                break;
            case 'price_to':
                if ($value) {
                    $this->price_to = $value;
                }else {
                    $this->price_to = 10000;
                }

                break;
            case 'cost_from':
                if ($value) {
                    $this->cost_from = $value;
                } else {
                    $this->cost_from = 0;
                }

                break;
            case 'cost_to':
                if ($value) {
                    $this->cost_to = $value;
                } else {
                    $this->cost_to = 10000;
                }

                break;
            case 'country':
                if (! in_array($value, $this->country)) {
                    $this->country[] = $value;
                } else {
                    unset($this->country[array_search($value, $this->country)]);
                }

                break;
            case 'source':
                if (! in_array($value, $this->source)) {
                    $this->source[] = $value;
                } else {
                    unset($this->source[array_search($value, $this->source)]);
                }

                break;
        }
    }

    public function render(): View
    {
        if ($this->country == []){
            $offers = Offer::query()
                ->where('title', 'like', '%' . $this->key . '%')
                ->where('price','>=',$this->price_from)
                ->where('price','<=',$this->price_to)
                ->where('cost','>=',$this->cost_from)
                ->where('cost','<=',$this->cost_to)
                ->orderBy('created_at', 'desc');
        } else {
            foreach ($this->country as $country) {
                $results = Offer::query()
                    ->where('title', 'like', '%' . $this->key . '%')
                    ->where('price','>=',$this->price_from)
                    ->where('price','<=',$this->price_to)
                    ->where('cost','>=',$this->cost_from)
                    ->where('cost','<=',$this->cost_to)
                    ->where('country','like', '%' . $country . '%')
                    ->orderBy('created_at', 'desc');

                foreach ($results as $result) {
                    $offers[] = $result;
                }
            }
        }

        $countries = Offer::all()->unique('country')->pluck('country');
        $allowed_sources = [];

        foreach (Offer::all() as $offer) {
            foreach (explode("\n", $offer->allowed_sources) as $line) {
                if (! in_array($line, $allowed_sources)) {
                    $allowed_sources[] = str_replace("\n", "", str_replace("\r", "", $line));
                }
            }
        }

        if (! isset($offers)) {
            $offers = $results;
        }

        if (! $this->source == []) {
            $j = 0;

            foreach ($this->source as $source) {
                $j++;

                if ($j == 1) {
                    $offers = $offers->where('allowed_sources', 'like', '%'.$source.'%');
                } else {
                    $offers = $offers->orWhere('allowed_sources', 'like', '%'.$source.'%');
                }
            }
        }

        $offers = $offers->get();

        return view('livewire.offers-list', compact(['offers', 'countries', 'allowed_sources']));
    }
}
