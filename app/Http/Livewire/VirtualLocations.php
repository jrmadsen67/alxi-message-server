<?php

namespace App\Http\Livewire;

use App\Models\VirtualLocation;
use Illuminate\Support\Str;

class VirtualLocations extends BaseLivewire
{
    public $country_id;

//    public $devices;

    protected $rules = [
        'country_id' => 'required',
        'imei' => 'required',
        'os' => 'required',
    ];

    protected $entity = 'virtual_locations';

    protected $modelName = 'App\Models\VirtualLocation';

    public function setData()
    {
        $this->renderData = [
            'records' => VirtualLocation::all()->sortBy('country_id'),
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

//        $this->devices = $record->devices;

        $this->updateMode = true;
    }
}
