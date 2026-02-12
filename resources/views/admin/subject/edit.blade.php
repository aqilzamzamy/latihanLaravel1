<x-admin.layout>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 py-8">
        <div class="max-w-3xl mx-auto px-6">

            {{-- Header --}}
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Edit Mata Pelajaran</h1>
                <p class="text-gray-600 dark:text-gray-400 mt-2">Perbarui informasi mata pelajaran</p>
            </div>

            {{-- Form Card --}}
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                <form action="{{ route('admin.subjects.update', $subject->id) }}" method="POST" class="p-8 space-y-6">
                    @csrf
                    @method('PUT')

                    {{-- Nama Mapel --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Nama Mata Pelajaran <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            name="name" 
                            value="{{ old('name', $subject->name) }}"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 transition"
                            placeholder="Nama mata pelajaran" 
                            required
                        >
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Deskripsi --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Deskripsi <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            name="description" 
                            rows="4"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 transition resize-vertical"
                            placeholder="Deskripsi mata pelajaran"
                            required
                        >{{ old('description', $subject->description) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Actions --}}
                    <div class="flex gap-3 pt-6 border-t border-gray-200 dark:border-gray-700">
                        <a 
                            href="{{ route('admin.subjects.index') }}" 
                            class="px-6 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg font-medium transition shadow-sm"
                        >
                            Batal
                        </a>
                        <button 
                            type="submit" 
                            class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition shadow-sm"
                        >
                            Perbarui
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-admin.layout>