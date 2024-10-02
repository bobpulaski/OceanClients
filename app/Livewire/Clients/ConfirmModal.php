<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use App\Models\Client;

class ConfirmModal extends Component
{
    public function delete($id)
    {
        Client::find($id)->delete();

        // Вызываем событие для обновления родительского компонента
        $this->dispatch('recordDeleted');

    }
    public function render()
    {
        return view('livewire.clients.confirm-modal');
    }
}
