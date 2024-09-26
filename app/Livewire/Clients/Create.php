<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use App\Models\Client;

class Create extends Component
{

    public $name, $inn;
    protected $rules = [
        'name' => 'required',
        'inn' => 'required',
    ];
    public function store()
    {
        Client::create($this->validate());

        session()->flash('message', 'Clients successfully created.');

        return redirect()->route('clients.index');
    }

    public function render()
    {
        return view('livewire.clients.create');
    }
}
