<form action="{{ route('admin.students.store') }}" method="POST" class="space-y-4">
    @csrf
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
        Tambah Student
    </h3>

    <div class="grid gap-4 sm:grid-cols-1">
        {{-- 1. Field Nama --}}
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name" required value="{{ old('name') }}"
                class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white @error('name') border-red-500 @enderror">
            @error('name')
                <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- 2. Field Email --}}
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}"
                class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white @error('email') border-red-500 @enderror">
            @error('email')
                <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- 3. Field Alamat --}}
        <div>
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
            <input type="text" name="address" id="address" value="{{ old('address') }}"
                class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white @error('address') border-red-500 @enderror">
            @error('address')
                <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- 4. Field Kelas (Dropdown) --}}
        <div>
            <label for="classroom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Classroom</label>
            <select id="classroom" name="classroom_id" required
                class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white @error('classroom_id') border-red-500 @enderror">
                <option value="">-- Select Classroom --</option>
                {{-- Pastikan variabel $classrooms tersedia saat view ini dipanggil --}}
                @foreach ($classrooms as $classroom)
                    <option value="{{ $classroom->id }}" {{ old('classroom_id') == $classroom->id ? 'selected' : '' }}>
                        {{ $classroom->name }}
                    </option>
                @endforeach
            </select>
            @error('classroom_id')
                <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex justify-end space-x-2">
        <button type="submit"
                class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">
            Save
        </button>
    </div>
</form>