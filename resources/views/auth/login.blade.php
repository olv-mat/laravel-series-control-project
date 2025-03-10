<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Login</h2>
            <form method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-300" autocomplete="off">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-300">
                </div>
                <button type="submit" class="w-full bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600">Login</button>
                <p class="mt-4 text-center text-gray-600">
                    Don't have an account?  
                    <a href="{{ route('register') }}" class="text-indigo-500 hover:underline">Sign up</a>
                </p>
            </form>
        </div>
    </body>
</html>
