<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;

class ClientTable extends Component
{
    public function render()
    {
        $clients = Client::all();
        return view('livewire.client-table', [
            'clients' => $clients,
        ]);
    }
}
