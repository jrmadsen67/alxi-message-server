<?php

namespace App\Http\Livewire;

use App\Models\Device;
use App\Models\DevicePlan;
use App\Models\PhysicalLocation;
use App\Models\VirtualLocation;
use Illuminate\Support\Str;

class Devices extends BaseLivewire
{
    public $nickname;
    public $imei;
    public $os;
    public $device_plan_id;
    public $physical_location_id;
    public $physical_location_port;
    public $virtual_location_id;

    public $devicePlans;
    public $physicalLocations;
    public $virtualLocations;

    protected $rules = [
        'nickname' => 'required',
        'imei' => 'required',
        'os' => 'required',
        'device_plan_id' => 'nullable',
        'physical_location_id' => 'nullable',
        'physical_location_port' => 'nullable', //@TODO: sometimes, when physical_location_id chosen
        'virtual_location_id' => 'nullable',
    ];

    protected $entity = 'devices';

    protected $modelName = 'App\Models\Device';

    public function setData()
    {
        $this->devicePlans = DevicePlan::select('id', 'nickname')->get();
        $this->physicalLocations = PhysicalLocation::select('id', 'nickname')->get();
        $this->virtualLocations = VirtualLocation::select('id')->get();
        $this->renderData = [
            'records' => Device::all()->sortBy('nickname'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->nickname = null;
        $this->imei = null;
        $this->os = null;
        $this->device_plan_id = null;
        $this->physical_location_id = null;
        $this->physical_location_port = null;
        $this->virtual_location_id = null;
    }

    public function edit($id)
    {
        $record = Device::find($id);

        $this->selected_id = $record->id;
        $this->nickname = $record->nickname;
        $this->imei = $record->imei;
        $this->os = $record->os;
        $this->device_plan_id = $record->device_plan_id;
        $this->physical_location_id = $record->physical_location_id;
        $this->physical_location_port = $record->physical_location_port;
        $this->virtual_location_id = $record->virtual_location_id;

        $this->updateMode = true;
    }
}
