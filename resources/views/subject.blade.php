<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="max-w-5xl mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-5">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Desctiption</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Teacher</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($subject as $s)
                <tr>
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4">{{ $s->name }}</td>
                    <td class="px-6 py-4">{{ $s->description }}</td>
                    <td class="px-6 py-4">{{ $s->teacher->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
