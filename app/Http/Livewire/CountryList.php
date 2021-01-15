<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Country;

class CountryList extends Component
{
    public function render()
    {
        return view('livewire.country', [
            'countries' => Country::all()->sortBy('name'),
        ]);
    }
}
