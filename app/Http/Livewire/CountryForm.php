<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;

class CountryForm extends Component
{
    public Country $country;

    public $name;
    public $cc;

    public function render()
    {
        logger('render');
        $this->name = $this->country->name;
        $this->cc = $this->country->cc;
        return view('livewire.country-form');
    }

    public function edit($country)
    {
//        $this->name = $country->name;
//        $this->cc = $country->cc;
        logger('edit');
        $this->updateMode = true;
    }

    public function update()
    {
        logger('update');
        $validatedDate = $this->validate([
            'name' => 'required',
            'cc' => 'required',
        ]);

        $this->country->update([
            'name' => $this->name,
            'cc' => $this->cc,
        ]);

        $this->updateMode = false;
        session()->flash('message', 'Country Updated Successfully.');

//        $this->resetInputFields();
    }
}
