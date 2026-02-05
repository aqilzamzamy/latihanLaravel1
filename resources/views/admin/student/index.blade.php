<x-admin.layout>
    <div class="p-6">

        <div class="mb-4 flex justify-between items-center">
    <form action="{{ route('admin.students.index') }}" method="GET" class="flex gap-2">
        <input
            type="text"
            name="search"
            placeholder="Cari wali (nama, job, telp, email)..."
            value="{{ request('search') }}"
            class="border rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
        <button
            type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm shadow"
        >
            Search
        </button>

        @if(request('search'))
            <a href="{{ route('admin.students.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded text-sm shadow">
                Reset
            </a>
        @endif
    </form>
</div>
       
        {{-- Header Section --}}
        <div
            class="flex flex-col md:flex-row items-center justify-between space-y-3
             md:space-y-0 md:space-x-4 p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm mb-4">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
                Daftar Siswa
            </h1>

            {{-- Tombol Tambah --}}
            <a href="{{ route('admin.students.create') }}"
                class="flex items-center justify-center text-white
               bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300
               font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-500
               dark:hover:bg-green-600 focus:outline-none dark:focus:ring-green-800 transition">
                <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110
                        2h-5v5a1 1 0 11-2 0v-5H4a1 1 0
                        110-2h5V4a1 1 0 011-1z" />
                </svg>
                Tambah Siswa
            </a>
        </div>

        {{-- Alert Success --}}
        @if (session('success'))
            <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-2 rounded-lg mb-4 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        {{-- Table Section --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white dark:bg-gray-800">
            <table class="w-full text-sm text-left text-gray-600 dark:text-gray-300">
                <thead class="text-xs uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                    <tr>
                        <th class="px-6 py-3 text-center">Nama</th>
                        <th class="px-6 py-3 text-center">Email</th>
                        <th class="px-6 py-3 text-center">Kelas</th>
                        <th class="px-6 py-3 text-center">Alamat</th>
                        <th class="px-6 py-3 text-center">Tanggal Lahir</th>
                        <th class="px-6 py-3 text-center">Gender</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $student)
                        <tr class="border-t hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            <td class="px-6 py-4 text-center font-medium text-gray-900 dark:text-white">
                                {{ $student->name }}
                            </td>
                            <td class="px-6 py-4 text-center">{{ $student->email }}</td>
                            <td class="px-6 py-4 text-center">{{ $student->classroom->name ?? '-' }}</td>
                            <td class="px-6 py-4 text-center">{{ $student->alamat }}</td>
                            <td class="px-6 py-4 text-center">{{ $student->birthday }}</td>
                            <td class="px-6 py-4 text-center">{{ ucfirst($student->gender) }}</td>

                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center items-center space-x-2">
                                    {{-- Tombol Edit --}}
                                    <a href="{{ route('admin.students.edit', $student->id) }}"
                                        class="inline-flex items-center bg-blue-500 hover:bg-blue-600
                                               text-white px-3 py-1 rounded text-xs font-medium shadow-sm transition">

                                        Edit
                                    </a>

                                    {{-- Tombol Hapus --}}
                                    <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin hapus data ini?')" class="inline-flex">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center bg-red-500 hover:bg-red-600
                                                   text-white px-3 py-1 rounded text-xs font-medium shadow-sm transition">

                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-4">
                {{ $students->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
</x-admin.layout>
