<div id="confirm-modal" class="fixed inset-0 flex hidden items-center justify-center bg-black bg-opacity-10">
    <div class="mx-4 w-1/3 rounded-lg bg-[#394d57] bg-opacity-80 text-white shadow-lg backdrop-blur-[2px]">
        <div class="p-6">
            <h2 class="text-lg font-semibold">{{ __('Delete Confirmation') }}</h2>
            <p class="mt-2">Вы уверены, что хотите удалить клиента<span id="clientId"></span>?</p>
        </div>
        <div class="flex justify-end p-4">
            <button id="cancelButton"
                class="mr-2 rounded bg-gray-300 px-4 py-2 text-gray-700 hover:bg-gray-400">{{ __('Cancel') }}
            </button>
            <button id="okButton" class="rounded bg-red-400 px-4 py-2 text-white hover:bg-red-600">{{ __('Delete') }}
            </button>
        </div>
    </div>
</div>

<script>
    // Закрыть модальное окно (Отмена)
    document.getElementById('cancelButton').addEventListener('click', function() {
        document.getElementById('confirm-modal').classList.add('hidden'); // Скрываем модальное окно
    });
</script>
