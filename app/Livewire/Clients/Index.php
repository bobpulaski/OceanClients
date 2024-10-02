<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use App\Models\Client;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;

    // public function delete($id)
    // {
    //     Client::find($id)->delete();
    //     session()->flash('message', 'Client Deleted Successfully.');
    // }

    protected $listeners = ['recordDeleted' => 'refreshList'];

    public function openModal($clientId)
    {
        $this->dispatch('openModal', $clientId);
    }

    public function refreshList()
    {
        // Обновите вашу логику, например, загрузите записи снова

        $clients = Client::paginate(4);
        session()->flash('message', 'Запись успешно удалена.'); // сообщение об успешном удалении
        return view('livewire.clients.index', ['clients' => $clients, 'isRendered' => 'true'])->layout('layouts.app');
    }

    public function render()
    {
        $clients = Client::paginate(4);
        return view('livewire.clients.index', ['clients' => $clients, 'isRendered' => 'true'])->layout('layouts.app');
    }
}
