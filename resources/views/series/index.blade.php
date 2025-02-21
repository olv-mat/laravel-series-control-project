<x-layout title="Series">
    @isset($successMessage)
        <div class="bg-green-500 text-white p-4 mb-4 rounded">
            {{ $successMessage }}
        </div>
    @endisset
    @isset($errorMessage)
        <div class="bg-red-500 text-white p-4 mb-4 rounded">
            {{ $errorMessage }}
        </div>
    @endisset
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
        <ul class="space-y-2">
            @foreach ($series as $serie)
            <li class="text-gray-800 flex justify-between items-center">
                <span>{{ $serie->name }}</span>
                <div class="flex space-x-2">
                    <form method="post" action="{{ route('series.destroy', $serie->id) }}">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                    </form>
                    <a href="{{ route('series.edit', $serie->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</a>
                </div>
            </li>
            @endforeach
        </ul>
        <a href="{{ route('series.create') }}" class="block text-center text-indigo-600 hover:underline mt-4">Create</a>
    </div>
</x-layout>