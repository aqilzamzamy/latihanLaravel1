<form :action="editUrl" method="POST" class="space-y-4" x-show="editStudent">
    @csrf
    @method('PUT') 

    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-6">
        Edit Data Siswa: 
        <span x-text="editStudent ? editStudent.name : ''" class="font-bold"></span>
    </h3>

    <div class="grid gap-4 sm:grid-cols-2">
        
        {{-- NIS --}}
        <div>
            <label for="edit_nis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIS</label>
            <input 
                type="text" 
                name="nis" 
                id="edit_nis" 
                :value="editStudent ? editStudent.nis : ''"
                required
                class="w-full border rounded-lg p-2.5 text-sm text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >
        </div>

        {{-- Nama --}}
        <div>
            <label for="edit_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Siswa</label>
            <input 
                type="text" 
                name="name" 
                id="edit_name" 
                :value="editStudent ? editStudent.name : ''"
                required
                class="w-full border rounded-lg p-2.5 text-sm text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >
        </div>

        {{-- Kelas --}}
        <div>
            <label for="edit_classroom_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
            <select 
                name="classroom_id" 
                id="edit_classroom_id" 
                required
                class="w-full border rounded-lg p-2.5 text-sm text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >
                <option value="">Pilih Kelas</option>
                {{-- Menggunakan x-bind:selected untuk memilih opsi yang sesuai --}}
                @foreach ($classrooms as $classroom)
                    <option 
                        :value="{{ $classroom->id }}" 
                        x-bind:selected="editStudent && editStudent.classroom_id == {{ $classroom->id }}"
                    >
                        {{ $classroom->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        {{-- Gender --}}
        <div>
            <label for="edit_gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
            <select 
                name="gender" 
                id="edit_gender" 
                class="w-full border rounded-lg p-2.5 text-sm text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >
                <option value="">Pilih Gender</option>
                <option value="Laki-laki" x-bind:selected="editStudent && editStudent.gender == 'Laki-laki'">Laki-laki</option>
                <option value="Perempuan" x-bind:selected="editStudent && editStudent.gender == 'Perempuan'">Perempuan</option>
            </select>
        </div>

        {{-- Tanggal Lahir --}}
        <div>
            <label for="edit_date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
            <input 
                type="date" 
                name="date_of_birth" 
                id="edit_date_of_birth" 
                :value="editStudent ? editStudent.date_of_birth : ''"
                class="w-full border rounded-lg p-2.5 text-sm text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >
        </div>
        
        {{-- Alamat --}}
        <div class="sm:col-span-2">
            <label for="edit_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <textarea 
                name="address" 
                id="edit_address" 
                rows="3" 
                class="w-full border rounded-lg p-2.5 text-sm text-gray-900 bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                x-text="editStudent ? editStudent.address : ''"
            ></textarea>
        </div>
    </div>

    <div class="flex justify-end space-x-2 pt-4">
        <button type="submit"
            class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 text-sm font-medium">
            Update Siswa
        </button>
    </div>
</form>