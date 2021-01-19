<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;

use App\Models\Country;

class Countries extends BaseLivewire
{
    public $name;
    public $cc;

    public $networks;
    public $physicalLocations;
    public $virtualLocations;

    protected $rules = [
        'name' => 'required',
        'cc' => 'required',
    ];

    protected $entity = 'country';

    protected $modelName = 'App\Models\Country';

    public function setData()
    {
        $this->renderData = [
            'records' => Country::all()->sortBy('name'),
            'entity' => Str::plural($this->entity)
        ];
    }

    public function resetInput(){
        $this->name = null;
        $this->cc = null;
    }

    public function edit($id)
    {
        $record = Country::find($id);

        $this->selected_id = $record->id;
        $this->name = $record->name;
        $this->cc = $record->cc;

        $this->networks = $record->networks;
        $this->physicalLocations = $record->physicalLocations;
        $this->virtualLocations = $record->virtualLocations;

        $this->updateMode = true;
    }
}
