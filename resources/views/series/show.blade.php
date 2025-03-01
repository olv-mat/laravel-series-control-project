<x-layout title="Series Details">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl w-full mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">{!! $series->name !!}</h1>
        <ul class="space-y-2">
            @foreach ($seasons as $season)
                <li class="text-gray-800 flex justify-between items-center">
                    <span class="font-semibold">Season {{ $season->number }}</span>
                    <span class="bg-gray-300 text-gray-800 text-sm font-semibold px-2 py-1 rounded-full">{{ $season->episodes->count() }}</span>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('series.index') }}" class="block text-center text-indigo-600 hover:underline mt-4">Back</a>
    </div>
</x-layout>