<x-admin.layout>
    <div class="p-6">
        <h1 class="text-xl font-bold mb-4">Tambah Mata Pelajaran</h1>

        <form action="{{ route('admin.subjects.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-2 gap-4">

                {{-- Nama Mapel --}}
                <div>
                    <label class="font-medium">Nama Mapel:</label>
                    <input 
                        type="text" 
                        name="name" 
                        class="border w-full p-2 rounded" 
                        required>
                </div>

                {{-- Deskripsi Mapel --}}
                <div>
                    <label class="font-medium">Deskripsi:</label>
                    <input
                        type="text"
                        name="description"
                        class="border w-full p-2 rounded"
                        required>
                </div>

            </div>

            <button 
                class="bg-green-500 text-white px-4 py-2 rounded mt-4 shadow hover:bg-green-600 transition">
                Simpan
            </button>
        </form>
    </div>
</x-admin.layout>
