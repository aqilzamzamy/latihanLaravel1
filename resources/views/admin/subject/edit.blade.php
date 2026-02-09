<x-admin.layout>
    <div class="p-6">
        <h1 class="text-xl font-bold mb-4">Edit Mata Pelajaran</h1>

        <form action="{{ route('admin.subjects.update', $subject->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-4">

                {{-- Nama Mapel --}}
                <div>
                    <label class="block mb-1 font-semibold">Nama Mapel:</label>
                    <input 
                        type="text" 
                        name="name" 
                        value="{{ old('name', $subject->name) }}" 
                        class="border w-full p-2 rounded focus:outline-none focus:ring focus:ring-green-300" 
                        placeholder="Masukkan nama mapel" 
                        required
                    >
                </div>

                {{-- Deskripsi --}}
                <div>
                    <label class="block mb-1 font-semibold">Deskripsi:</label>
                    <input 
                        type="text" 
                        name="description" 
                        value="{{ old('description', $subject->description) }}" 
                        class="border w-full p-2 rounded focus:outline-none focus:ring focus:ring-green-300" 
                        placeholder="Masukkan deskripsi mapel" 
                        required
                    >
                </div>

            </div>

            <div class="mt-6">
                <button 
                    type="submit" 
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded"
                >
                    Perbarui
                </button>

                <a 
                    href="{{ route('admin.subjects.index') }}" 
                    class="ml-2 bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded"
                >
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-admin.layout>