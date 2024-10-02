<div>

    <div class="py-12">
{{--        @if (session()->has('message'))
            <livewire:clients.alert />
        @endif--}}
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

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
                                            class="open-modal rounded bg-red-400 px-3 py-1 text-white hover:bg-red-600"
                                            data-client-id="{{ $client->id }}">x
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </x-tables.table>
                    <div class="pt-4">
                     {{ $clients->links() }}
                    </div>
                </div>
            </div>
        </div>
        <livewire:clients.confirm-modal />
    </div>

</div>

@script
    <script>
        $wire.$on('openModal', (event) => {
            document.getElementById('confirm-modal').classList.remove('hidden');

            // Добавляем атрибут wire:click
            const okButton = document.getElementById('okButton');
            okButton.setAttribute('wire:click', `delete(${event})`);
        });
    </script>
@endscript
