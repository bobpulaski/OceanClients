<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    <div class="flex justify-between items-center mb-6">

                        <x-typo.h1>{{ __('Clients') }}</x-typo.h1>
                        <a class="text-gray-500 text-xs border font-bold py-1 px-2 rounded hover:bg-gray-100 hover:text-gray-700"
                            href="{{ route('clients.create') }}" wire:navigate> {{ __('+ Add Client') }}</a>
                    </div>

                    <x-tables.table>
                        <x-tables.thead>
                            <tr>
                                <x-tables.th>ID</x-tables.th>
                                <x-tables.th>Имя</x-tables.th>
                                <x-tables.th>ИНН</x-tables.th>
                            </tr>
                        </x-tables.thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr class="border-b border-neutral-200">
                                    <td class="whitespace-nowrap px-6 py-4">{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->inn }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </x-tables.table>
                    {{ $clients->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
