<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <!-- Header -->
    <div class="flex justify-between items-center mt-10 mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Classroom List</h1>

        <!-- Tombol membuka modal (tetap pakai alpine kamu) -->
        <button 
            @click="openAddModal = true"
            class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">
            + Add Classroom
        </button>
    </div>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

                <div x-data="{ openAddModal: false }">

                    {{-- Modal Add Classroom --}}
                    <div x-show="openAddModal"
                        x-transition
                        class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">

                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">
                            <button
                                @click="openAddModal = false"
                                class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">
                                ✕
                            </button>

                            @include('admin.classroom.create')
                        </div>

                    </div>
                </div>

                {{-- Table --}}
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-6 py-3">No</th>
                                <th class="px-6 py-3">Room Name</th>
                                <th class="px-6 py-3">Students List</th>
                                <th class="px-6 py-3">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($classrooms as $classroom)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">{{ $loop->iteration }}</td>

                                    <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                        {{ $classroom->name }}
                                    </td>

                                    <td class="px-6 py-4 text-gray-700 dark:text-gray-300">
                                        @if ($classroom->students->count())
                                            <ul class="list-disc list-inside">
                                                @foreach ($classroom->students as $student)
                                                    <li>{{ $student->name }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <span class="text-gray-400 italic">Belum ada siswa</span>
                                        @endif
                                    </td>

                                    {{-- Dropdown Action --}}
                                    <td class="px-6 py-4 text-right">
                                        @php
                                            $dropdownId = 'classroom-dropdown-' . $classroom->id;
                                            $buttonId = $dropdownId . '-button';
                                        @endphp

                                        <button id="{{ $buttonId }}"
                                            data-dropdown-toggle="{{ $dropdownId }}"
                                            class="inline-flex items-center text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-100"
                                            type="button">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>

                                        <div id="{{ $dropdownId }}"
                                            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a href="#"
                                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                        Show
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                        Edit
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a href="#"
                                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>

</x-admin.layout>
