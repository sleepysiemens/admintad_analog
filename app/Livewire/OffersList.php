<?php

namespace App\Livewire;

use App\Models\Offer;
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
    public $show_countries = false;
    public $show_price = false;
    public $show_cost = false;
    public $show_source = false;

    public function search($key)
    {
        $this->key = $key;
    }

    public function filters()
    {
        $this->show_filters = !$this->show_filters;

        $this->show_countries = false;
        $this->show_price = false;
        $this->show_cost = false;
        $this->show_source = false;
    }

    public function dropdown($section)
    {
        switch ($section){
            case 'countries':
                $this->show_countries = !$this->show_countries;
                break;
            case 'price':
                $this->show_price = !$this->show_price;
                break;
            case 'cost':
                $this->show_cost = !$this->show_cost;
                break;
            case 'source':
                $this->show_source = !$this->show_source;
                break;
        }
    }

    public function filter($value, $method)
    {
        switch ($method){
            case 'price_from':
                if($value!=null){
                    $this->price_from = $value;
                }else{
                    $this->price_from = 0;
                }
                break;
            case 'price_to':
                if($value!=null){
                    $this->price_to = $value;
                }else{
                    $this->price_to = 10000;
                }
                break;
            case 'cost_from':
                if($value!=null){
                    $this->cost_from = $value;
                }else{
                    $this->cost_from = 0;
                }
                break;
            case 'cost_to':
                if($value!=null){
                    $this->cost_to = $value;
                }else{
                    $this->cost_to = 10000;
                }
                break;
            case 'country':
                if(!in_array($value, $this->country)){
                    $this->country[] = $value;
                }else{
                    unset($this->country[array_search($value, $this->country)]);
                }
                break;
            case 'source':
                if(!in_array($value, $this->source)){
                    $this->source[] = $value;
                }else{
                    unset($this->source[array_search($value, $this->source)]);
                }
                break;
        }
    }

    public function render()
    {
        if($this->country == []){
            $offers = Offer::query()
                ->where('title', 'like', '%' . $this->key . '%')
                ->where('price','>=',$this->price_from)
                ->where('price','<=',$this->price_to)
                ->where('cost','>=',$this->cost_from)
                ->where('cost','<=',$this->cost_to)
                ->orderBy('created_at', 'desc');
        }else{
            foreach ($this->country as $country) {
                $results = Offer::query()
                    ->where('title', 'like', '%' . $this->key . '%')
                    ->where('price','>=',$this->price_from)
                    ->where('price','<=',$this->price_to)
                    ->where('cost','>=',$this->cost_from)
                    ->where('cost','<=',$this->cost_to)
                    ->where('country','like', '%' . $country . '%')
                    ->orderBy('created_at', 'desc');

                foreach ($results as $result){
                    $offers[] = $result;
                }
            }
        }

        if(!$this->source == []){
            $j = 0;
            foreach ($this->source as $source)
            {
                $j++;
                if($j == 1){
                    $offers = $offers->where('allowed_sources', 'like', '%'.$source.'%');
                }else{
                    $offers = $offers->orWhere('allowed_sources', 'like', '%'.$source.'%');
                }
            }
        }

        $countries = Offer::all()->unique('country')->pluck('country');
        $allowed_sources = [];

        foreach (Offer::all() as $offer) {
            foreach(explode("\n", $offer->allowed_sources) as $line){
                if(!in_array($line, $allowed_sources)){
                    $allowed_sources[] = str_replace("\n", "", str_replace("\r", "", $line));
                }
            }
        }

        $offers = $offers->get();

        return view('livewire.offers-list', compact(['offers', 'countries', 'allowed_sources']));
    }
}
