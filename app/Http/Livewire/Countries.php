<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Country;

class Countries extends Component
{
    public $selected_id;
    public $name;
    public $cc;

    public $networks;
    public $physicalLocations;
    public $virtualLocations;

    public $updateMode = false;
    public $createMode = false;

    public function render()
    {
        return view('livewire.countries.component', [
            'countries' => Country::all()->sortBy('name'),
        ]);
    }

    public function edit($id)
    {
        $country = Country::find($id);

        $this->selected_id = $country->id;
        $this->name = $country->name;
        $this->cc = $country->cc;

        $this->networks = $country->networks;
        $this->physicalLocations = $country->physicalLocations;
        $this->virtualLocations = $country->virtualLocations;

        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->createMode = false;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'cc' => 'required',
        ]);

        $country = Country::find($this->selected_id);
        $country->update([
            'name' => $this->name,
            'cc' => $this->cc,
        ]);

        $this->updateMode = false;
        session()->flash('message', 'Country Updated Successfully.');
    }

    public function create()
    {
        $this->createMode = true;
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'cc' => 'required',
        ]);

        Country::create($validatedData);

        $this->createMode = false;
        session()->flash('message', 'Country Created Successfully.');
    }

    public function delete($id)
    {
        $country = Country::find($id);
        $country->delete();
    }
}
