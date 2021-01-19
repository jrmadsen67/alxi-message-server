<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Network;
use Illuminate\Support\Str;


class Networks extends BaseLivewire
{
    // field list
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

    protected $renderData = [];

    protected $entity = 'network';

    protected $modelName = 'App\Models\Network';

    public function setData()
    {
        $this->countries = Country::select('id', 'name')->get();
        $this->renderData = [
            'records' => Network::with('country')
                ->get()
                ->sortBy('name'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->name = null;
        $this->country_id = null;
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
