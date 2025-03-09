<x-layout title="Show">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl w-full mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">{!! $series->name !!}</h1>
        <ul class="space-y-2">
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
        <a href="{{ route('series.index') }}" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 mt-4 inline-block">Back</a>
    </div>
</x-layout>