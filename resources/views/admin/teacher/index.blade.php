<x-admin.layout>
    
   <form method="GET" action="{{ route('admin.teachers.index') }}">
    <input type="text"
           name="search"
           placeholder="Cari guru atau pelajaran..."
           value="{{ request('search') }}">
    <button>Cari</button>
</form>


    <div class="p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Daftar Wali</h1>
            <a href="{{ route('admin.teachers.create') }}" 
               class="flex items-center justify-center text-white
               bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300
               font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-500
               dark:hover:bg-green-600 focus:outline-none dark:focus:ring-green-800 transition">
                <span>+ Tambah Wali</span>
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 text-sm uppercase tracking-wide">
                        <th class="py-3 px-4 text-left">No</th>
                        <th class="py-3 px-4 text-left">Nama</th>
                        <th class="py-3 px-4 text-left">Subject</th>
                        <th class="py-3 px-4 text-left">Telepon</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left">Alamat</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $guru)
                        <tr class="border-t hover:bg-gray-50 transition">
                            <td class="py-3 px-4 text-gray-700 font-medium">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4 font-semibold text-gray-900">{{ $guru->name }}</td>
                            <td class="py-3 px-4">{{ $guru->subject->name ?? '-' }}</td>
                            <td class="py-3 px-4">{{ $guru->phone }}</td>
                            <td class="py-3 px-4">{{ $guru->email }}</td>
                            <td class="py-3 px-4">{{ $guru->address }}</td>
                            <td class="py-3 px-4 text-center">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ route('admin.teachers.edit', $guru->id) }}"
                                       class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm font-medium shadow-sm">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.teachers.destroy', $guru->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin hapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm font-medium shadow-sm">
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
                {{ $teachers->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
</x-admin.layout>
