<?php

namespace App\Http\Livewire;

use App\Models\Device;
use Illuminate\Support\Str;

class Devices extends BaseLivewire
{
    public $nickname;
    public $imei;
    public $os;

//    public $devices;

    protected $rules = [
        'nickname' => 'required',
        'imei' => 'required',
        'os' => 'required',
    ];

    protected $entity = 'device_group';

    protected $modelName = 'App\Models\Device';

    public function setData()
    {
        $this->renderData = [
            'records' => Device::all()->sortBy('nickname'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->nickname = null;
        $this->imei = null;
        $this->os = null;
    }

    public function edit($id)
    {
        $record = Device::find($id);

        $this->selected_id = $record->id;
        $this->nickname = $record->nickname;
        $this->imei = $record->imei;
        $this->os = $record->os;

//        $this->devices = $record->devices;

        $this->updateMode = true;
    }
}
