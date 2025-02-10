<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Series Control - {{ $title }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 font-sans">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl font-bold mb-6 text-center">{{ $title }}</h1>
            {{ $slot }}
        </div>
    </body>
</html>