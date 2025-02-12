<x-layout title="Create">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
        <form action="/series/save" method="post" class="space-y-4">
            @csrf
            <div class="flex items-center space-x-4">
                <label for="name" class="text-sm font-medium text-gray-700">Name:</label>
                <input type="text" name="name" id="name" autocomplete="off" placeholder="Fill with the serie name" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 flex-1" required>
            </div>
            <div>
                <input type="submit" value="Send" class="w-full p-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">
            </div>
        </form>
        <a href="/series" class="block text-center text-indigo-600 hover:underline mt-4">Series</a>
    </div>
</x-layout>