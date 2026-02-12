<x-admin.layout>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 py-8">
        <div class="max-w-7xl mx-auto px-6">

            {{-- Search --}}
            <div class="mb-6 flex justify-between items-center">
                <form action="{{ route('admin.teachers.index') }}" method="GET" class="flex gap-2">
                    <input
                        type="text"
                        name="search"
                        placeholder="Cari guru (nama, mapel, email)..."
                        value="{{ request('search') }}"
                        class="border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm"
                    >
                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm shadow transition">
                        Search
                    </button>

                    @if(request('search'))
                        <a href="{{ route('admin.teachers.index') }}"
                           class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg text-sm shadow transition">
                            Reset
                        </a>
                    @endif
                </form>
            </div>

            {{-- Header --}}
            <div class="flex justify-between items-center bg-white dark:bg-gray-800 p-6 rounded-xl shadow mb-6">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
                    Daftar Guru
                </h1>

                <a href="{{ route('admin.teachers.create') }}"
                    class="flex items-center bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm shadow transition">
                    Tambah Guru
                </a>
            </div>

            {{-- Alert --}}
            @if (session('success'))
                <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-lg mb-6 shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Table --}}
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-gray-600 dark:text-gray-300">
                        <thead class="text-xs uppercase bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-center">No</th>
                                <th class="px-6 py-3 text-center">Nama</th>
                                <th class="px-6 py-3 text-center">Mata Pelajaran</th>
                                <th class="px-6 py-3 text-center">Email</th>
                                <th class="px-6 py-3 text-center">Telepon</th>
                                <th class="px-6 py-3 text-center">Alamat</th>
                                <th class="px-6 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($teachers as $guru)
                                <tr class="border-t hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                    <td class="px-6 py-4 text-center">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 text-center">{{ $guru->name }}</td>
                                    <td class="px-6 py-4 text-center">{{ $guru->subject->name ?? '-' }}</td>
                                    <td class="px-6 py-4 text-center">{{ $guru->email }}</td>
                                    <td class="px-6 py-4 text-center">{{ $guru->phone }}</td>
                                    <td class="px-6 py-4 text-center">{{ $guru->address }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center gap-2">
                                            <a href="{{ route('admin.teachers.edit', $guru->id) }}"
                                                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-xs shadow">
                                                Edit
                                            </a>

                                            <form action="{{ route('admin.teachers.destroy', $guru->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin hapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs shadow">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-6 text-center text-gray-500">
                                        Tidak ada data guru
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="p-6 border-t dark:border-gray-700">
                    {{ $teachers->appends(request()->query())->links() }}
                </div>
            </div>

        </div>
    </div>
</x-admin.layout>
