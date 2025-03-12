<x-layout title="Register">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full mx-auto">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold">Name</label>
                <input type="text" id="name" name="name" required autocomplete="off" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold">Email</label>
                <input type="email" id="email" name="email" required autocomplete="off" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold">Password</label>
                <input type="password" id="password" name="password" required autocomplete="off" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <button type="submit" class="w-full p-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300 text-lg">Register</button>
        </form>
        <p class="text-gray-600 text-sm mt-4">Already have an account? <a href="{{ route('login') }}" class="text-indigo-500 hover:underline">Login</a></p>
    </div>
</x-layout>