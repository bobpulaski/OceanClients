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
    public function save()
    {
        Client::create($this->validate());
        $this->dispatch ('alert');
        $this->redirect('/clients/index', navigate: true);

    }

    public function render()
    {
        return view('livewire.clients.create')->layout('layouts.app');;
    }
}
