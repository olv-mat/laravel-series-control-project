<x-layout title="Series">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl w-full mx-auto">
        @isset($successMessage)
            <div class="bg-green-500 text-white p-4 mb-4 rounded">
                {{ $successMessage }}
            </div>
        @endisset
        <ul class="space-y-2">
            @foreach ($series as $serie)
                <li class="text-gray-800 flex justify-between items-center">
                    <span>{{ $serie->name }}</span>
                    <div class="flex space-x-2">
                        <a href="{{ route('series.show', $serie->id) }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Show</a>
                        <a href="{{ route('series.edit', $serie->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</a>
                        <form method="post" action="{{ route('series.destroy', $serie->id) }}">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('series.create') }}" class="block text-center text-indigo-600 hover:underline mt-4">Create</a>
    </div>
</x-layout>