<x-layout title="Series Control">
    @isset($successMessage)
        <div class="bg-green-500 text-white p-4 mb-4 rounded">
            {{ $successMessage }}
        </div>
    @endisset
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl w-full mx-auto relative">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-gray-800">Hello, {{ $name }}</h2>
            @auth
            <a href="{{ route('logout') }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</a>
            @endauth
            @guest
            <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</a>
            @endguest
        </div>
        <ul class="space-y-4 mb-6">
            @foreach ($series as $serie)
                <li class="text-gray-800 flex justify-between items-center bg-gray-100 p-4 rounded-lg shadow">
                    <span class="font-medium">{{ $serie->name }}</span>
                    <div class="flex space-x-2">
                        @auth
                        <a href="{{ route('series.show', $serie->id) }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Show</a>
                        <a href="{{ route('series.edit', $serie->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</a>
                        <form method="post" action="{{ route('series.destroy', $serie->id) }}">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
                        </form>
                        @endauth
                    </div>
                </li>
            @endforeach
        </ul>
        @auth
        <a href="{{ route('series.create') }}" class="w-full p-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300 text-lg cursor-pointer block text-center">Create</a>
        @endauth
    </div>
</x-layout>