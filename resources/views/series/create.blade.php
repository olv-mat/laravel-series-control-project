<x-layout title="Create">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl w-full mx-auto">
        <form action="{{ route('series.index')}}" method="post" class="space-y-6">
            @csrf
            <div class="flex items-center space-x-4">
                <label for="name" class="text-base font-medium text-gray-700">Name:</label>
                <input type="text" name="name" id="name" autocomplete="off" autofocus 
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="flex items-center space-x-4">
                <label for="seasons" class="text-base font-medium text-gray-700">Seasons:</label>
                <input type="number" name="seasons" id="seasons" autocomplete="off" 
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="flex items-center space-x-4">
                <label for="episodes" class="text-base font-medium text-gray-700">Episodes:</label>
                <input type="number" name="episodes" id="episodes" autocomplete="off"
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <input type="submit" value="Add" class="w-full p-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300 text-lg cursor-pointer">
            </div>
        </form>
        <a href="{{ route('series.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-4 inline-block">Back</a>
    </div>
</x-layout>