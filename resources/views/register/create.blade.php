<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-12 border border-gray-200 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form method="post" action="/register" enctype="multipart/form-data" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                    <input type="text" class="border border-gray-500 p-2 w-full" name="name" id="name" required value="{{old('name')}}">
                    @error('name') <div class="text-red-500 text-xs mt-1"><sup>*</sup>{{ $message }}</div> @enderror
                </div>

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                    <input type="text" class="border border-gray-500 p-2 w-full" name="username" id="username" value="{{ old('username') }}" required>
                    @error('username') <div class="text-red-500 text-xs mt-1"><sup>*</sup>{{ $message }}</div> @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input type="email" class="border border-gray-500 p-2 w-full" name="email" id="email" value="{{ old('email') }}" required>
                    @error('email') <div class="text-red-500 text-xs mt-1"><sup>*</sup>{{ $message }}</div> @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input type="password" class="border border-gray-500 p-2 w-full" name="password" id="password" value="{{ old('password') }}" required>
                    @error('password') <div class="text-red-500 text-xs mt-1"><sup>*</sup>{{ $message }}</div> @enderror
                </div>

                <div class="mb-6">
                    <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
