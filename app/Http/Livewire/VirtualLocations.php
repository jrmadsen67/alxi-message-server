<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\VirtualLocation;
use Illuminate\Support\Str;

class VirtualLocations extends BaseLivewire
{
    public $country_id;
    public $devices;

    public $countries;

    protected $rules = [
        'country_id' => 'required',
    ];

    protected $entity = 'virtual_locations';

    protected $modelName = 'App\Models\VirtualLocation';

    public function setData()
    {
        $this->countries = Country::select('id', 'name')->get();
        $this->renderData = [
            'records' => VirtualLocation::all()->sortBy('id'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->country_id = null;
    }

    public function edit($id)
    {
        $record = VirtualLocation::find($id);

        $this->selected_id = $record->id;
        $this->country_id = $record->country_id;
        $this->devices = $record->devices;

        $this->updateMode = true;
    }
}
