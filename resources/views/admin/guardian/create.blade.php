<x-admin.layout>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 py-8">
        <div class="max-w-3xl mx-auto px-6">

            {{-- Header --}}
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Tambah Wali Murid</h1>
                <p class="text-gray-600 dark:text-gray-400 mt-2">Tambahkan data wali murid baru</p>
            </div>

            {{-- Form Card --}}
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                <form action="{{ route('admin.guardians.store') }}" method="POST" class="p-8 space-y-6">
                    @csrf

                    {{-- Nama --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Nama <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            name="name" 
                            value="{{ old('name') }}"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 transition"
                            placeholder="Nama wali murid" 
                            required
                        >
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Pekerjaan --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Pekerjaan <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            name="job" 
                            value="{{ old('job') }}"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 transition"
                            placeholder="Pekerjaan wali murid" 
                            required
                        >
                        @error('job')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nomor Telepon --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Nomor Telepon <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            name="phone" 
                            value="{{ old('phone') }}"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 transition"
                            placeholder="Nomor telepon" 
                            required
                        >
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 transition"
                            placeholder="Email wali murid" 
                            required
                        >
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Actions --}}
                    <div class="flex gap-3 pt-6 border-t border-gray-200 dark:border-gray-700">
                        <a 
                            href="{{ route('admin.guardians.index') }}" 
                            class="px-6 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg font-medium transition shadow-sm"
                        >
                            Batal
                        </a>
                        <button 
                            type="submit" 
                            class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium transition shadow-sm"
                        >
                            Simpan
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-admin.layout>