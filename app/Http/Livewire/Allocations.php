<?php

namespace App\Http\Livewire;

use App\Models\Allocation;
use App\Models\Device;
use App\Models\DeviceGroup;
use App\Models\SimCard;
use App\Models\SimCardPlan;
use Illuminate\Support\Str;

class Allocations extends BaseLivewire
{
    public $device_id;
    public $sim_card_id;
    public $device_group_id;

    public $devices;
    public $simCards;
    public $deviceGroups;

    protected $rules = [
        'device_id' => 'required',
        'sim_card_id' => 'required',
        'device_group_id' => 'nullable',
    ];

    protected $entity = 'allocations';

    protected $modelName = 'App\Models\Allocation';

    public function setData()
    {
        $this->devices = Device::select('id', 'nickname')->get();
        $this->simCards = SimCard::select('id', 'iccid')->get();
        $this->deviceGroups = DeviceGroup::select('id', 'nickname')->get();
        $this->renderData = [
            'records' => Allocation::all()->sortBy('nickname'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->device_id = null;
        $this->sim_card_id = null;
        $this->device_group_id = null;
    }

    public function edit($id)
    {
        $record = Allocation::find($id);

        $this->selected_id = $record->id;
        $this->device_id = $record->device_id;
        $this->sim_card_id = $record->sim_card_id;
        $this->device_group_id = $record->device_group_id;

        $this->updateMode = true;
    }
}
