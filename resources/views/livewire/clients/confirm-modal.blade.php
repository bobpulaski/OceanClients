<div id="confirm-modal" class="fixed inset-0 flex hidden items-center justify-center bg-black bg-opacity-30">
    <div class="mx-4 w-1/3 rounded-lg bg-white shadow-lg">
        <div class="p-6">
            <h2 class="text-lg font-semibold">Подтверждение</h2>
            <p class="mt-2">Вы уверены, что хотите удалить клиента <span id="clientId"></span>?</p>
        </div>
        <div class="flex justify-end p-4">
            <button id="cancelButton" class="mr-2 rounded bg-gray-300 px-4 py-2 text-gray-700 hover:bg-gray-400">Отмена
            </button>
            <button id="okButton" class="rounded bg-red-400 px-4 py-2 text-white hover:bg-red-600">Delete
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
