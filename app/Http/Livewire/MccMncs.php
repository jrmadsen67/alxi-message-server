<?php

namespace App\Http\Livewire;

use App\Models\MccMnc;
use App\Models\Network;
use Illuminate\Support\Str;

class MccMncs extends BaseLivewire
{
    public $mcc;
    public $mnc;
    public $network_id;

    public $networks;

    protected $rules = [
        'mcc' => 'required',
        'mnc' => 'required',
        'network_id' => 'required',
    ];

    protected $entity = 'mcc_mncs';

    protected $modelName = 'App\Models\MccMnc';

    public function setData()
    {
        $this->networks = Network::select('id', 'name')->get();
        $this->renderData = [
            'records' => MccMnc::all()->sortBy('mcc'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->mcc = null;
        $this->mnc = null;
        $this->network_id = null;
    }

    public function edit($id)
    {
        $record = MccMnc::find($id);

        $this->selected_id = $record->id;
        $this->mcc = $record->mcc;
        $this->mnc = $record->mnc;
        $this->network_id = $record->network_id;

        $this->updateMode = true;
    }
}
