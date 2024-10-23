<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite('resources/css/app.css')
    </head>
<body class="bg-gradient-to-br from-black via-gray-500 to-white h-screen flex items-center justify-center">

    <!-- Form Login -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <form>
            <div class="mb-4">
                <label for="username" class="block text-left text-gray-700 font-bold mb-2">Username:</label>
                <input type="text" id="username" class="w-full px-4 py-2 border-2 border-red-500 rounded-md focus:outline-none focus:border-red-500" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-left text-gray-700 font-bold mb-2">Password:</label>
                <input type="password" id="password" class="w-full px-4 py-2 border-2 border-red-500 rounded-md focus:outline-none focus:border-red-500" required>
            </div>
            <button type="submit" class="w-full bg-black text-white py-2 rounded-md hover:bg-gray-800">LOGIN</button>
        </form>
    </div>

</body>
</html>
