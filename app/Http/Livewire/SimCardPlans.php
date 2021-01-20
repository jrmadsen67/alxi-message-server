<?php

namespace App\Http\Livewire;

use App\Models\DevicePlan;
use App\Models\Network;
use App\Models\SimCardPlan;
use Illuminate\Support\Str;

class SimCardPlans extends BaseLivewire
{
    public $nickname;
    public $hourly_capacity;
    public $daily_capacity;
    public $monthly_capacity;

    protected $rules = [
        'nickname' => 'required',
        'hourly_capacity' => 'required',
        'daily_capacity' => 'required',
        'monthly_capacity' => 'required',
    ];

    protected $entity = 'sim_card_plans';

    protected $modelName = 'App\Models\SimCardPlan';

    public function setData()
    {
        $this->renderData = [
            'records' => SimCardPlan::all()->sortBy('nickname'),
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
        $record = SimCardPlan::find($id);

        $this->selected_id = $record->id;
        $this->nickname = $record->nickname;
        $this->hourly_capacity = $record->hourly_capacity;
        $this->daily_capacity = $record->daily_capacity;
        $this->monthly_capacity = $record->monthly_capacity;

        $this->updateMode = true;
    }
}
