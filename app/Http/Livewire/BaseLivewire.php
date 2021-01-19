<?php

namespace App\Http\Livewire;

use Livewire\Component;


class BaseLivewire extends Component
{
    public $selected_id;
    public $updateMode = false;
    public $createMode = false;

    protected $rules = [];

    protected $modelName;

    public function render(){}
    public function edit($id){}

    public function cancel()
    {
        $this->updateMode = false;
        $this->createMode = false;
    }

    public function update()
    {
        $validatedData = $this->validate();
        $record = (new $this->modelName)->find($this->selected_id);
        $record->update($validatedData);

        $this->updateMode = false;
        session()->flash('message', 'Record Updated Successfully.');
    }

    public function create()
    {
        $this->createMode = true;
    }

    public function store()
    {
        $validatedData = $this->validate();
        (new $this->modelName)->create($validatedData);

        $this->createMode = false;
        session()->flash('message', 'Record Created Successfully.');
    }

    public function delete($id)
    {
        $record = (new $this->modelName)->find($id);
        $record->delete();
    }
}


