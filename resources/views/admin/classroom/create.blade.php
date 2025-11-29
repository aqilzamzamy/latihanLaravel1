<form action="{{ route('admin.classroom.store') }}" method="POST" class="space-y-4">
    @csrf
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
        Tambah Kelas Baru
    </h3>

    <div class="grid gap-4 sm:grid-cols-1">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kelas</label>
            <input type="text" name="name" id="name" required
                class="w-full border rounded-lg p-2.5 text-sm text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Contoh: X IPA 1">
        </div>
    </div>

    <div class="flex justify-end space-x-2">
        <button type="submit"
            class="px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 text-sm font-medium">
            Simpan
        </button>
    </div>
</form>