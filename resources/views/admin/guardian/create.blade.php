<x-admin.layout>
    <div class="p-6">
        <h1 class="text-xl font-bold mb-4">Tambah Wali</h1>

        <form action="{{ route('admin.guardians.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 font-semibold">Nama:</label>
                    <input 
                        type="text" 
                        name="name" 
                        class="border w-full p-2 rounded focus:outline-none focus:ring focus:ring-green-300" 
                        placeholder="Masukkan nama wali" 
                        required
                    >
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Pekerjaan:</label>
                    <input 
                        type="text" 
                        name="job" 
                        class="border w-full p-2 rounded focus:outline-none focus:ring focus:ring-green-300" 
                        placeholder="Masukkan pekerjaan wali" 
                        required
                    >
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Nomor Telepon:</label>
                    <input 
                        type="text" 
                        name="phone" 
                        class="border w-full p-2 rounded focus:outline-none focus:ring focus:ring-green-300" 
                        placeholder="Masukkan nomor telepon wali" 
                        required
                    >
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Email:</label>
                    <input 
                        type="email" 
                        name="email" 
                        class="border w-full p-2 rounded focus:outline-none focus:ring focus:ring-green-300" 
                        placeholder="Masukkan email wali" 
                        required
                    >
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
                    href="{{ route('admin.guardian.index') }}" 
                    class="ml-2 bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded"
                >
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-admin.layout>
