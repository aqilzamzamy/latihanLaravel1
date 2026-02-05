<x-admin.layout>
    <div class="mb-4 flex justify-between items-center">
        <form action="{{ route('admin.subjects.index') }}" method="GET" class="flex gap-2">
            <input
                type="text"
                name="search"
                placeholder="Cari subject (nama, deskripsi)..."
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
                <a href="{{ route('admin.subjects.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded text-sm shadow">
                    Reset
                </a>
            @endif
        </form>
    </div>

    <div class="p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Daftar Mata Pelajaran</h1>
            <a href="{{ route('admin.subjects.create') }}" 
               class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded shadow-md flex items-center space-x-1">
                <span>+ Tambah Subject</span>
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 text-sm uppercase tracking-wide">
                        <th class="py-3 px-4 text-left">No</th>
                        <th class="py-3 px-4 text-left">Nama Subject</th>
                        <th class="py-3 px-4 text-left">Deskripsi</th>
                        <th class="py-3 px-4 text-left">Guru Pengajar</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($subjects as $subject)
                        <tr class="border-t hover:bg-gray-50 transition">
                            <td class="py-3 px-4 text-gray-700 font-medium">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4 font-semibold text-gray-900">{{ $subject->name }}</td>
                            <td class="py-3 px-4">{{ $subject->description }}</td>
                            <td class="py-3 px-4">
                                @if($subject->teacher)
                                    {{ $subject->teacher->name }}
                                @else
                                    <span class="text-gray-400 italic">Belum ada guru</span>
                                @endif
                            </td>
                            <td class="py-3 px-4 text-center">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ route('admin.subjects.edit', $subject->id) }}"
                                       class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm font-medium shadow-sm transition">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.subjects.destroy', $subject->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin hapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm font-medium shadow-sm transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-8 text-center text-gray-500">
                                Tidak ada data subject
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="p-4">
                {{ $subjects->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
</x-admin.layout>