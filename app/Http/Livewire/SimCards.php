<?php

namespace App\Http\Livewire;

use App\Models\SimCard;
use Illuminate\Support\Str;

class SimCards extends BaseLivewire
{
    public $iccid;
    public $msisdn;
    public $network_id;
    // 'device_plan_id', 'sim_card_plan_id'

//    public $devices;

    protected $rules = [
        'iccid' => 'required',
        'msisdn' => 'required',
        'network_id' => 'required',
    ];

    protected $entity = 'sim_cards';

    protected $modelName = 'App\Models\SimCard';

    public function setData()
    {
        $this->renderData = [
            'records' => SimCard::all()->sortBy('iccid'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->iccid = null;
        $this->msisdn = null;
        $this->network_id = null;
    }

    public function edit($id)
    {
        $record = SimCard::find($id);

        $this->selected_id = $record->id;
        $this->iccid = $record->iccid;
        $this->msisdn = $record->msisdn;
        $this->network_id = $record->network_id;

//        $this->devices = $record->devices;

        $this->updateMode = true;
    }
}
