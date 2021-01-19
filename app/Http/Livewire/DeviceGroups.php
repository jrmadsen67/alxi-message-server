<?php

namespace App\Http\Livewire;

use App\Models\DeviceGroup;
use Illuminate\Support\Str;

class DeviceGroups extends BaseLivewire
{
    public $nickname;

//    public $allocations;

    protected $rules = [
        'nickname' => 'required',
    ];

    protected $entity = 'device_group';

    protected $modelName = 'App\Models\DeviceGroup';

    public function setData()
    {
        $this->renderData = [
            'records' => DeviceGroup::all()->sortBy('nickname'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->nickname = null;
    }

    public function edit($id)
    {
        $record = DeviceGroup::find($id);

        $this->selected_id = $record->id;
        $this->nickname = $record->nickname;

//        $this->allocations = $record->allocations;

        $this->updateMode = true;
    }
}
