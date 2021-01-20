<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Device;
use App\Models\PhysicalLocation;
use Illuminate\Support\Str;

class PhysicalLocations extends BaseLivewire
{
    public $nickname;
    public $host;
    public $country_id;
    public $devices;

    public $countries;


    protected $rules = [
        'nickname' => 'required',
        'host' => 'required',
        'country_id' => 'required',
    ];

    protected $entity = 'physical_locations';

    protected $modelName = 'App\Models\PhysicalLocation';

    public function setData()
    {
        $this->countries = Country::select('id', 'name')->get();
        $this->renderData = [
            'records' => PhysicalLocation::all()->sortBy('nickname'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->nickname = null;
        $this->host = null;
        $this->country_id = null;
    }

    public function edit($id)
    {
        $record = PhysicalLocation::find($id);

        $this->selected_id = $record->id;
        $this->nickname = $record->nickname;
        $this->host = $record->host;
        $this->country_id = $record->country_id;
        $this->devices = $record->devices;

        $this->updateMode = true;
    }
}
