{{-- Pastikan ini berada di luar x-data utama di index, karena dipanggil via @include --}}

<div x-cloak x-show="openDeleteModal" x-transition.opacity 
    class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">
    
    <div @click.outside="openDeleteModal = false" 
        class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-md p-6 relative">
        
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
            Konfirmasi Penghapusan
        </h3>

        <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">
            Apakah Anda yakin ingin menghapus data siswa ini? Tindakan ini tidak dapat dibatalkan.
        </p>

        <div class="flex justify-end space-x-3">
            <button
                @click="openDeleteModal = false"
                type="button"
                class="py-2 px-4 text-sm fon    t-medium text-gray-900 bg-white rounded-lg border border-gray-200 
                       hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none 
                       focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 
                       dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
            >
                Batal
            </button>
            
            {{-- Form Delete (Method spoofing untuk DELETE request) --}}
            <form :action="deleteUrl" method="POST" @submit.prevent="submit">
                @csrf
                @method('DELETE')
                <button
                    type="submit"
                    class="py-2 px-4 text-sm font-medium text-white bg-red-600 rounded-lg 
                           hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 
                           dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900"
                >
                    Ya, Hapus
                </button>
            </form>
        </div>
    </div>
</div>