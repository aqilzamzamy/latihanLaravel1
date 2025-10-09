<x-layout>
<x-slot:judul>{{$title}}</x-slot:judul>

<div class="overflow-hidden rounded-xl shadow-lg border border-gray-200">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                No
                </th>
                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                Name
                </th>
                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                email
                </th>
                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                Kelas
                </th>
                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                Tanggal Lahir
                </th>
                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                Jenis Kelamin
                </th>
                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                Alamat
                </th>

            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ( $students as $student )
            <tr class="hover:bg-gray-100 transition-colors duration-200">
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">
                {{$loop->iteration}}
            </td>
            <!-- Diperbaiki: Menggunakan $student->name (akses objek) -->
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                {{$student->name}}
            </td>
            <!-- Diperbaiki: Menggunakan $student->email (akses objek) -->
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                {{$student->email}}
            </td>
            <!-- Diperbaiki: Menggunakan $student->grade (akses objek) -->
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                {{$student->classroom->name}}
            </td>
            <!-- Diperbaiki: Menggunakan $student->date_of_birth (akses objek) -->
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                {{$student->date_of_birth}}
            </td>
            <!-- Diperbaiki: Menggunakan $student->gender (akses objek) -->
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                {{$student->gender}}
            </td>
            <!-- Diperbaiki: Menggunakan $student->address (akses objek) -->
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                {{$student->address}}
            </td>
            
            </tr>
            @endforeach
     </tbody>
</table>

</div>
</x-layout>