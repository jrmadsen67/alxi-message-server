<?php

namespace App\Http\Livewire;

use App\Models\MccMnc;
use Illuminate\Support\Str;

class MccMncs extends BaseLivewire
{
    public $mcc;
    public $mnc;

//    public $devices;

    protected $rules = [
        'mcc' => 'required',
        'mnc' => 'required',
    ];

    protected $entity = 'device_group';

    protected $modelName = 'App\Models\MccMnc';

    public function setData()
    {
        $this->renderData = [
            'records' => MccMnc::all()->sortBy('nickname'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->mcc = null;
        $this->mnc = null;
    }

    public function edit($id)
    {
        $record = MccMnc::find($id);

        $this->selected_id = $record->id;
        $this->mcc = $record->mcc;
        $this->mnc = $record->mnc;

//        $this->devices = $record->devices;

        $this->updateMode = true;
    }
}
