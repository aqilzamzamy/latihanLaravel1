<x-admin.layout>
    <div class="p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Edit Data Guru</h2>

        <form action="{{ route('admin.teachers.update', $teacher->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            {{-- Nama --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="name" value="{{ old('name', $teacher->name) }}"
                       class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
                @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Mata Pelajaran --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Mata Pelajaran</label>
                <select name="subject_id" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
                    <option value="">-- Pilih Mata Pelajaran --</option>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}" 
                            {{ old('subject_id', $teacher->subject_id) == $subject->id ? 'selected' : '' }}>
                            {{ $subject->name }}
                        </option>
                    @endforeach
                </select>
                @error('subject_id') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Telepon --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Telepon</label>
                <input type="text" name="phone" value="{{ old('phone', $teacher->phone) }}"
                       class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
                @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Email --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email', $teacher->email) }}"
                       class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Alamat --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea name="address" rows="3"
                          class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>{{ old('address', $teacher->address) }}</textarea>
                @error('address') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Tombol --}}
            <div class="flex justify-end space-x-2 mt-4">
                <a href="{{ route('admin.teachers.index') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Batal</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Perbarui</button>
            </div>
        </form>
    </div>
</x-admin.layout>
