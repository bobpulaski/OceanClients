<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Simple') }}
        </h2>
    </x-slot>
    <div class="flex">
        <livewire:clients.index />
        <livewire:clients.create />
    </div>
</x-app-layout>
