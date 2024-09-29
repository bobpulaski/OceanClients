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
                                        {{--                                         <button --}}
                                        {{--                                            class="rounded border px-2 py-1 text-xs font-bold text-red-200 hover:bg-gray-100 hover:text-red-700" --}}
                                        {{--                                            type="button" wire:click="deleteId({{ $client->id }})">Remove</button> --}}
                                        {{--                                        <button wire:click="deleteId({{ $client->id }})" --}}
                                        {{--                                            class="openModal rounded border px-2 py-1 text-xs font-bold text-red-200 hover:bg-gray-100 hover:text-red-700" --}}
                                        {{--                                            type="button" data-client-id="{{ $client->id }}" --}}
                                        {{--                                            data-client-name="{{ $client->name }}">Remove</button> --}}
                                        <button class="rounded bg-red-400 px-4 py-2 text-white hover:bg-red-600"
                                            data-client-id="{{ $client->id }}"
                                            wire:click="delete({{ $client->id }})"
                                            wire:confirm="Are you sure you want to delete this client {{ $client->id }}?">Delete</button>
                                        {{-- onclick="confirmDelete()" --}}
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



    {{-- @script
        <script>
            let clientIdToDelete = null; // Храним ID клиента для удаления

            // Открыть модальное окно
            document.querySelectorAll('.openModal').forEach(function(button) {
                button.addEventListener('click', function() {
                    clientIdToDelete = this.getAttribute('data-client-id'); // Получаем ID клиента
                    document.getElementById('clientId').textContent =
                        clientIdToDelete; // Показываем ID в модальном окне
                    document.getElementById('modal').classList.remove('hidden'); // Показываем модальное окно
                });
            });

            // Закрыть модальное окно (Отмена)
            document.getElementById('cancelButton').addEventListener('click', function() {
                document.getElementById('modal').classList.add('hidden'); // Скрываем модальное окно
            });

            // Подтверждение удаления
            document.getElementById('okButton').addEventListener('click', function() {
                if (clientIdToDelete) {
                    console.log(clientIdToDelete);
                    // Вызов метода delete через Livewire
                    @this.call('delete', clientIdToDelete); // Убедитесь, что метод delete принимает ID клиента
                    document.getElementById('modal').classList.add('hidden'); // Скрываем модальное окно после удаления
                }
            });
        </script>
    @endscript --}}

    {{-- <script>
        // Открыть модальное окно
        document.querySelectorAll('.openModal').forEach(function(button) {
            button.addEventListener('click', function() {
                document.getElementById('modal').classList.remove('hidden'); // Показываем модальное окно
            });
        });

        // Закрыть модальное окно (Отмена)
        document.getElementById('cancelButton').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden'); // Скрываем модальное окно
        });
    </script> --}}

    {{--    <script> --}}
    {{--        // Открыть модальное окно --}}
    {{--        $('.openModal').on('click', function() { --}}
    {{--            $('#modal').removeClass('hidden'); // Показываем модальное окно --}}
    {{--        }); --}}
    {{--        --}}
    {{--        // Закрыть модальное окно (Отмена) --}}
    {{--        $('#cancelButton').on('click', function() { --}}
    {{--            $('#modal').addClass('hidden'); // Скрываем модальное окно --}}
    {{--        }); --}}
    {{--    </script> --}}

</div>
