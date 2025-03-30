<x-layout title="Show">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl w-full mx-auto flex flex-col items-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-4 text-center">{!! $series->name !!}</h1>
        <div class="mb-6 w-full">
            @if ($series->cover)
                <img src="{{ asset('storage/' . $series->cover) }}" alt="Capa de {{ $series->name }}" class="w-full h-auto object-cover rounded-lg">
            @else
                <img src="https://placehold.co/600x400" alt="Capa de {{ $series->name }}" class="w-full h-auto object-cover rounded-lg">
            @endif
        </div>
        <ul class="space-y-2 w-full">
            @foreach ($seasons as $season)
                <li class="text-gray-800 flex justify-between items-center">
                    <a href="{{ route('season.show', $season->id) }}" class="flex justify-between w-full hover:bg-gray-100 p-2 rounded-lg">
                        <span class="font-semibold">Season {{ $season->number }}</span>
                        <span class="bg-gray-300 text-gray-800 text-sm font-semibold px-3 py-1 rounded-md">
                            {{ $season->watchedEpisodes() }}/{{ $season->episodes->count() }}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="w-full mt-4">
            <a href="{{ route('series.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 inline-block">Back</a>
        </div>
    </div>
</x-layout>
