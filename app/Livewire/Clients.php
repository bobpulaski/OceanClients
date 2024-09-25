<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;

class Clients extends Component
{
    public function render()
    {
        $clients = Client::all();
        return view('livewire.clients', ['clients' => $clients]);
    }
}
