<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Country as Countries;

class Country extends Component
{
    public function render()
    {
        return view('livewire.country', [
            'countries' => Countries::all()->sortBy('country'),
        ]);
    }
}
