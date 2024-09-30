<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use App\Models\Client;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function delete($id)
    {
        // dd($id);

        Client::find($id)->delete();
        session()->flash('message', 'Client Deleted Successfully.');
    }

    public function openModal($clientId)
    {
        $this->dispatch('showModal', $clientId);
        // dd($clientId);
    }

    public function render()
    {
        $clients = Client::paginate(4);
        $this->dispatch('contentChanged', ['item' => 'updated']);
        return view('livewire.clients.index', ['clients' => $clients, 'isRendered' => 'true'])->layout('layouts.app');
    }
}
