<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Network;


class Networks extends BaseLivewire
{
    public $name;
    public $country_id;
    public $mccMncs;
    public $prefixes;
    public $simCards;

    public $countries;

    protected $rules = [
        'name' => 'required',
        'country_id' => 'required',
    ];

    protected $modelName = 'App\Models\Network';

    public function mount()
    {
        $this->countries = Country::select('id', 'name')->get();
    }

    public function render()
    {
        return view('livewire.networks.component', [
            'records' => Network::with('country')
                ->get()
                ->sortBy('name'),
        ]);
    }

    public function edit($id)
    {
        $record = Network::find($id);

        $this->selected_id = $record->id;
        $this->name = $record->name;
        $this->country_id = $record->country_id;

        $this->mccMncs = $record->mccMncs;
        $this->prefixes = $record->prefixes;
        $this->simCards = $record->simCards;

        $this->updateMode = true;
    }
}
