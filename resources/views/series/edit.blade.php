<x-layout title="Edit">
    <x-form action="{{ route('series.update', $series->id) }}" name="{{ $series->name }}"></x-form>
</x-layout>