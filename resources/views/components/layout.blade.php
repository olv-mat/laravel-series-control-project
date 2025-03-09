<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Series Control</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 font-sans">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl font-bold mb-6 text-center">{{ $title }}</h1>
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 mb-4 rounded">
                    <ul class="mt-1 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li class="flex items-center">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ $slot }}
        </div>
    </body>
</html>