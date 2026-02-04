<x-admin.layout>
    <div class="p-6">
        <h1 class="text-xl font-bold mb-4">Tambah Siswa</h1>

        <form action="{{ route('admin.students.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label>Nama:</label>
                    <input type="text" name="name" class="border w-full p-2 rounded" required>
                </div>

                <div>
                    <label>Email:</label>
                    <input type="email" name="email" class="border w-full p-2 rounded" required>
                </div>

                <div>
                    <label>Kelas:</label>
                    <select name="classroom_id" class="border w-full p-2 rounded">
                        @foreach($classrooms as $classroom)
                            <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Alamat:</label>
                    <input type="text" name="alamat" class="border w-full p-2 rounded">
                </div>

                <div>
                    <label>Tanggal Lahir:</label>
                    <input type="date" name="birthday" class="border w-full p-2 rounded">
                </div>

                <div>
                    <label>Gender:</label>
                    <select name="gender" class="border w-full p-2 rounded">
                        <option value="male">Laki-laki</option>
                        <option value="female">Perempuan</option>
                    </select>
                </div>
            </div>

            <button class="bg-green-500 text-white px-4 py-2 rounded mt-4">Simpan</button>
        </form>
    </div>
</x-admin.layout>
