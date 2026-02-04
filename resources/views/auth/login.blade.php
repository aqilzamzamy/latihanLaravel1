<x-layout>
    <x-slot:judul>Login</x-slot:judul>

    <div class="flex justify-center items-center min-h-[70vh]">
        <div class="w-full max-w-md bg-white rounded-lg shadow p-6">

            <h2 class="text-xl font-bold mb-6 text-center">Login</h2>

            @if ($errors->any())
                <div class="mb-4 text-sm text-red-600">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login.process') }}" method="POST" class="space-y-4">
                @csrf

                <input type="text" name="username" placeholder="Email"
                    class="w-full p-2 border rounded" required>

                <input type="password" name="password" placeholder="Password"
                    class="w-full p-2 border rounded" required>

                <button class="w-full bg-indigo-600 text-white py-2 rounded">
                    Login
                </button>
            </form>

        </div>
    </div>
</x-layout>