<x-layout title="Series">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
        <ul class="space-y-2">
            @foreach ($series as $serie)
                <li class="text-gray-800">{{ $serie->name }}</li>
            @endforeach
        </ul>
        <a href="/series/create" class="block text-center text-indigo-600 hover:underline mt-4">Create</a>
    </div>
</x-layout>