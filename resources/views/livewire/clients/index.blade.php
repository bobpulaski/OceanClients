<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @if (session()->has('message'))
                <x-ui.alert />
            @endif
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    <div class="mb-6 flex items-center justify-between">

                        <x-typo.h1>{{ __('Clients') }}</x-typo.h1>
                        <a class="rounded border px-2 py-1 text-xs font-bold text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                            href="{{ route('clients.create') }}" wire:navigate> {{ __('+ Add Client') }}</a>
                    </div>

                    <x-tables.table>
                        <x-tables.thead>
                            <tr>
                                <x-tables.th>ID</x-tables.th>
                                <x-tables.th>Имя</x-tables.th>
                                <x-tables.th>ИНН</x-tables.th>
                                <x-tables.th>Actions</x-tables.th>
                            </tr>
                        </x-tables.thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr class="border-b border-neutral-200">
                                    <td class="whitespace-nowrap px-6 py-4">{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->inn }}</td>
                                    <td>
                                        <button wire:click="openModal({{ $client->id }})"
                                            class="openModal rounded bg-red-400 px-4 py-2 text-white hover:bg-red-600"
                                            data-client-id="{{ $client->id }}">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </x-tables.table>
                    {{ $clients->links() }}
                </div>
            </div>
        </div>
    </div>

    <div id="modal" class="fixed inset-0 flex hidden items-center justify-center bg-black bg-opacity-30">
        <div class="mx-4 w-1/3 rounded-lg bg-white shadow-lg">
            <div class="p-6">
                <h2 class="text-lg font-semibold">Подтверждение</h2>
                <p class="mt-2">Вы уверены, что хотите удалить клиента <span id="clientId"></span>?</p>
            </div>
            <div class="flex justify-end p-4">
                <button id="cancelButton"
                    class="mr-2 rounded bg-gray-300 px-4 py-2 text-gray-700 hover:bg-gray-400">Отмена</button>
                <button id="okButton" class="rounded bg-red-400 px-4 py-2 text-white hover:bg-red-600">Delete
                    {{ $client->id }}</button>
            </div>
        </div>
    </div>



</div>

@script
    <script>
        // document.addEventListener('livewire:init', function() {
        //     Livewire.on('showModal', function(clientId) {
        //         console.log(clientId);
        //     });
        // });

        $wire.on('showModal', (event) => {
            // console.log(event);
            document.querySelectorAll('.openModal').forEach(function(button) {
                button.addEventListener('click', function() {
                    document.getElementById('modal').classList.remove(
                        'hidden'); // Показываем модальное окно
                });
            });
        });
    </script>
@endscript
