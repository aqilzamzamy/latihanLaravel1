<x-admin.layout>
    <div class="p-6">
        <h1 class="text-xl font-bold mb-4">Tambah Subject</h1>

        <form action="{{ route('admin.subjects.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label class="block mb-1 font-semibold">Nama Subject:</label>
                    <input 
                        type="text" 
                        name="name" 
                        value="{{ old('name') }}"
                        class="border w-full p-2 rounded focus:outline-none focus:ring focus:ring-green-300" 
                        placeholder="Masukkan nama subject" 
                        required
                    >
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Deskripsi:</label>
                    <textarea 
                        name="description" 
                        rows="4"
                        class="border w-full p-2 rounded focus:outline-none focus:ring focus:ring-green-300" 
                        placeholder="Masukkan deskripsi subject" 
                        required
                    >{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
  
            <div class="mt-6">
                <button 
                    type="submit" 
                    class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded"
                >
                    Simpan
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