<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Country;

class Countries extends Component
{
    public $selected_id;
    public $name;
    public $cc;
    public $updateMode = false;

    public function render()
    {
        return view('livewire.countries.component', [
            'countries' => Country::all()->sortBy('name'),
        ]);
    }

    public function edit($country)
    {
        $country = (object) $country;
        $this->selected_id = $country->id;
        $this->name = $country->name;
        $this->cc = $country->cc;

        $this->updateMode = true;
    }

    public function cancelEdit()
    {
        $this->updateMode = false;
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

//        $this->resetInputFields();
    }

    public function delete($country)
    {
        $country = Country::find($country['id']);
        $country->delete();
    }
}
