<?php

namespace App\Http\Livewire;

use App\Models\Prefix;
use Illuminate\Support\Str;

class Prefixes extends BaseLivewire
{
    public $prefix;
    public $network_id;

//    public $devices;

    protected $rules = [
        'prefix' => 'required',
        'network_id' => 'required',
    ];

    protected $entity = 'prefixes';

    protected $modelName = 'App\Models\Prefix';

    public function setData()
    {
        $this->renderData = [
            'records' => Prefix::all()->sortBy('prefix'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->prefix = null;
        $this->network_id = null;
    }

    public function edit($id)
    {
        $record = Prefix::find($id);

        $this->selected_id = $record->id;
        $this->prefix = $record->prefix;
        $this->network_id = $record->network_id;

//        $this->devices = $record->devices;

        $this->updateMode = true;
    }
}
