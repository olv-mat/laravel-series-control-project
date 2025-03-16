<x-layout title="{!! $season->series->name !!} - Season {{ $season->number }}">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl w-full mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Episodes</h1>
        <form action="{{ route('season.update', $season->id) }}" method="post">
            @csrf
            @method('PUT')
            <ul class="space-y-2">
                @foreach ($season->episodes as $episode)
                    <li class="flex items-center justify-between bg-gray-100 p-2 rounded-lg">
                        <span class="text-gray-800 font-semibold">Episode {{ $episode->number }}</span>
                        <input 
                            type="checkbox" 
                            id="episode-{{ $episode->id }}" 
                            name="watched[]" 
                            value="{{ $episode->id }}" 
                            class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                            {{ $episode->watched ? 'checked' : '' }}
                        >
                    </li>
                @endforeach
            </ul>
            <button type="submit" class="w-full bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 mt-4 inline-block text-center block">Save</button>
        </form>
        <a href="{{ route('series.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-4 inline-block">Back</a>
    </div>
</x-layout>