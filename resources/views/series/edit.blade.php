<x-layout title="Edit">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl w-full mx-auto">
        <form action="{{ route('series.update', $series->id) }}" method="post" class="space-y-6">
            @csrf
            @method("PUT")
            <div class="flex items-center space-x-4">
                <label for="name" class="text-base font-medium text-gray-700">Name:</label>
                <input
                    required 
                    type="text" 
                    name="name" 
                    id="name" 
                    autocomplete="off" 
                    placeholder="Fill with the serie name"
                    @isset($series) value="{!! $series->name !!}" @endisset 
                    class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 flex-1">
            </div>
            <div>
                <input type="submit" value="Send" class="w-full p-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300 text-lg">
            </div>
        </form>
        <a href="{{ route('series.index') }}" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 mt-4 inline-block">Back</a>
    </div>
</x-layout>