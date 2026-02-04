<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-5">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pekerjaan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Phone</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($guardians as $walis)
                    <tr>
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $walis->name }}</td>
                        <td class="px-6 py-4">{{ $walis->job }}</td>
                        <td class="px-6 py-4">{{ $walis->phone }}</td>
                        <td class="px-6 py-4">{{ $walis->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>