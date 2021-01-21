<?php

namespace App\Http\Livewire;

use App\Models\DevicePlan;
use Illuminate\Support\Str;

class DevicePlans extends BaseLivewire
{
    public $nickname;
    public $hourly_capacity;
    public $daily_capacity;
    public $monthly_capacity;

    public $devices;
    public $simcards;

    protected $rules = [
        'nickname' => 'required',
        'hourly_capacity' => 'required',
        'daily_capacity' => 'required',
        'monthly_capacity' => 'required',
    ];

    protected $entity = 'device_plans';

    protected $modelName = 'App\Models\DevicePlan';

    public function setData()
    {
        $this->renderData = [
            'records' => DevicePlan::all()->sortBy('nickname'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->nickname = null;
        $this->hourly_capacity = null;
        $this->daily_capacity = null;
        $this->monthly_capacity = null;
    }

    public function edit($id)
    {
        $record = DevicePlan::find($id);

        $this->selected_id = $record->id;
        $this->nickname = $record->nickname;
        $this->hourly_capacity = $record->hourly_capacity;
        $this->daily_capacity = $record->daily_capacity;
        $this->monthly_capacity = $record->monthly_capacity;

        $this->devices = $record->devices;
        $this->simcards = $record->simcards;

        $this->updateMode = true;
    }
}
