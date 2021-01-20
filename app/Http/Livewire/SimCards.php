<?php

namespace App\Http\Livewire;

use App\Models\DevicePlan;
use App\Models\Network;
use App\Models\SimCard;
use App\Models\SimCardPlan;
use Illuminate\Support\Str;

class SimCards extends BaseLivewire
{
    public $iccid;
    public $msisdn;
    public $network_id;
    public $device_plan_id;
    public $sim_card_plan_id;

    public $networks;
    public $device_plans;
    public $simcard_plans;

    protected $rules = [
        'iccid' => 'required',
        'msisdn' => 'required',
        'network_id' => 'required',
        'device_plan_id' => 'required',
        'sim_card_plan_id' => 'required',
    ];

    protected $entity = 'sim_cards';

    protected $modelName = 'App\Models\SimCard';

    public function setData()
    {
        $this->networks = Network::select('id', 'name')->get();
        $this->device_plans = DevicePlan::select('id', 'nickname')->get();
        $this->simcard_plans = SimCardPlan::select('id', 'nickname')->get();
        $this->renderData = [
            'records' => SimCard::all()->sortBy('iccid'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->iccid = null;
        $this->msisdn = null;
        $this->network_id = null;
        $this->device_plan_id = null;
        $this->sim_card_plan_id = null;
    }

    public function edit($id)
    {
        $record = SimCard::find($id);

        $this->selected_id = $record->id;
        $this->iccid = $record->iccid;
        $this->msisdn = $record->msisdn;
        $this->network_id = $record->network_id;
        $this->device_plan_id = $record->device_plan_id;
        $this->sim_card_plan_id = $record->sim_card_plan_id;

        $this->updateMode = true;
    }
}
