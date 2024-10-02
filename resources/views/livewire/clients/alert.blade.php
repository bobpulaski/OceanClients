<div>
    <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 500);
    setTimeout(() => show = false, 3500)" class="fixed right-4 top-8 z-50">
        <div x-show="show"
            class="rounded-lg bg-[#394d57] bg-opacity-80 p-4 text-white shadow-lg backdrop-blur-[2px] transition-opacity"
            x-transition:enter="transition-opacity duration-500"
            x-transition:leave="transition-opacity duration-500 opacity-0">
            <p>{{ session('message') }}</p>
        </div>
    </div>
</div>
