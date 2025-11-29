<x-admin.layout :title="$title">

    <!-- HEADER -->
    <div class="flex justify-between items-center mt-10 mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Teacher List</h1>

        <!-- OPEN CREATE MODAL -->
        <button data-modal-target="addTeacherModal" data-modal-toggle="addTeacherModal"
            class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">
            + Add Teacher
        </button>
    </div>

    <!-- TABLE -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Mata Pelajaran</th>
                    <th class="px-6 py-3">Telepon</th>
                    <th class="px-6 py-3">Alamat</th>
                    <th class="px-6 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <div class="text-red-500 text-5xl">TES WARNA</div>


            <tbody>
                @foreach ($teachers as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <td class="px-6 py-4">{{ $loop->iteration }}</td>

                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $item->name }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $item->subject->name ?? 'N/A' }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $item->phone }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $item->address }}
                        </td>
                        

                        <!-- ACTION DROPDOWN -->
                        <td class="px-6 py-4 text-right">
                            <button id="dropdownButton{{ $item->id }}"
                                data-dropdown-toggle="dropdownMenu{{ $item->id }}"
                                class="text-gray-500 hover:text-gray-700 dark:hover:text-white">

                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </button>

                            <!-- DROPDOWN MENU -->
                            <div id="dropdownMenu{{ $item->id }}"
                                class="hidden z-10 w-36 bg-white divide-y divide-gray-100 rounded-lg shadow
                                dark:bg-gray-700 dark:divide-gray-600">

                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">

                                    <!-- EDIT BUTTON -->
                                    <li>
                                        <button data-modal-target="updateTeacherModal{{ $item->id }}"
                                            data-modal-toggle="updateTeacherModal{{ $item->id }}"
                                            class="w-full text-left px-4 py-2 hover:bg-gray-100 
                                                dark:hover:bg-gray-600 dark:hover:text-white">
                                            Edit
                                        </button>
                                    </li>

                                    <!-- DELETE BUTTON -->
                                    <li>
                                        <button data-modal-target="deleteTeacherModal{{ $item->id }}"
                                            data-modal-toggle="deleteTeacherModal{{ $item->id }}"
                                            class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100 
                                                dark:hover:bg-gray-600 dark:text-red-500">
                                            Delete
                                        </button>
                                    </li>

                                </ul>
                            </div>
                        </td>

                    </tr>

                    <!-- ============ UPDATE MODAL ============ -->
                    <div id="updateTeacherModal{{ $item->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full h-full bg-black/50">
                        <div class="relative w-full max-w-md p-4">
                            <div class="bg-white rounded-lg shadow dark:bg-gray-700">

                                <div class="flex justify-between items-center p-4 border-b dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Edit Teacher
                                    </h3>
                                    <button data-modal-hide="updateTeacherModal{{ $item->id }}"
                                        class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                        ✕
                                    </button>
                                </div>

                                <form action="{{ route('admin.teacher.update', $item->id) }}" method="POST"
                                    class="p-6 space-y-4">
                                    @csrf
                                    @method('PUT')

                                    <div>
                                        <label class="text-sm text-gray-900 dark:text-white">Name</label>
                                        <input type="text" name="name" value="{{ $item->name }}" required
                                            class="w-full p-2.5 rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white">
                                    </div>

                                    <div>
                                        <label class="text-sm text-gray-900 dark:text-white">Subject Name</label>
                                        <input type="text" name="subject_name"
                                            value="{{ $item->subject->name ?? '' }}" required
                                            class="w-full p-2.5 rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white">
                                    </div>

                                    <div>
                                        <label class="text-sm text-gray-900 dark:text-white">Email</label>
                                        <input type="email" name="email" value="{{ $item->email }}" required
                                            class="w-full p-2.5 rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white">
                                    </div>

                                    <div>
                                        <label class="text-sm text-gray-900 dark:text-white">Phone</label>
                                        <input type="text" name="phone" value="{{ $item->phone }}" required
                                            class="w-full p-2.5 rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white">
                                    </div>

                                    <div>
                                        <label class="text-sm text-gray-900 dark:text-white">Address</label>
                                        <input type="text" name="address" value="{{ $item->address }}" required
                                            class="w-full p-2.5 rounded-lg bg-gray-50 border dark:bg-gray-600 dark:text-white">
                                    </div>

                                    <div class="flex justify-end gap-2">
                                        <button type="button"
                                            data-modal-hide="updateTeacherModal{{ $item->id }}"
                                            class="px-4 py-2 bg-gray-200 rounded-lg">
                                            Cancel
                                        </button>

                                        <button type="submit"
                                            class="px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800">
                                            Update
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- ============ DELETE MODAL ============ -->
                    <div id="deleteTeacherModal{{ $item->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full h-full bg-black/50">
                        <div class="relative w-full max-w-md p-4">
                            <div class="bg-white rounded-lg shadow dark:bg-gray-700">

                                <div class="p-6 text-center">
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-300">
                                        Yakin ingin menghapus data ini?
                                    </h3>

                                    <form action="{{ route('admin.teacher.destroy', $item->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="button"
                                            data-modal-hide="deleteTeacherModal{{ $item->id }}"
                                            class="px-4 py-2 bg-gray-200 rounded-lg mr-2">
                                            Cancel
                                        </button>

                                        <button type="submit"
                                            class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                            Delete
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                @endforeach
            </tbody>
        </table>
    </div>

    <!-- ============ CREATE MODAL (PUNYAMU) ============ -->
    @includeIf('Admin.teacher.create')

</x-admin.layout>
