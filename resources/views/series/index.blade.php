<x-layout title="Series">
    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>
    <a href="/series/create">Create</a>
</x-layout>