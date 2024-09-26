<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use App\Models\Client;

class Index extends Component
{
    public function render()
    {
        $clients = Client::All();
        return view('livewire.clients.index', ['clients' => $clients]);
    }
}
