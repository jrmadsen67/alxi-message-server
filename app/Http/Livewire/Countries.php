<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Country;

class Countries extends BaseLivewire
{
    public $name;
    public $cc;

    public $networks;
    public $physicalLocations;
    public $virtualLocations;

    protected $rules = [
        'name' => 'required',
        'cc' => 'required',
    ];

    protected $modelName = 'App\Models\Country';

    public function render()
    {
        return view('livewire.countries.component', [
            'records' => Country::all()->sortBy('name'),
        ]);
    }

    public function edit($id)
    {
        $record = Country::find($id);

        $this->selected_id = $record->id;
        $this->name = $record->name;
        $this->cc = $record->cc;

        $this->networks = $record->networks;
        $this->physicalLocations = $record->physicalLocations;
        $this->virtualLocations = $record->virtualLocations;

        $this->updateMode = true;
    }
}
