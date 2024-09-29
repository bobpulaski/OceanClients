<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Client;

class Index extends Component
{
    use WithPagination;

    public function delete($id)
    {
        // dd($id);

        Client::find($id)->delete();
        session()->flash('message', 'Client Deleted Successfully.');
    }

    public function render()
    {
        $clients = Client::paginate(4);
        return view('livewire.clients.index', ['clients' => $clients])->layout('layouts.app');
    }
}
