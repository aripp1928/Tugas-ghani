<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fisher's Haven</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen" style="background-image: url('https://www.example.com/water-background.jpg'); background-size: cover;">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h1 class="text-2xl font-semibold text-center mb-6 text-blue-800">Login dulu, Angler!</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 border border-green-300 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <ul class="bg-red-100 text-red-700 border border-red-300 p-2 rounded mb-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('auth.login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-blue-800">Email:</label>
                <input type="email" name="email" required class="mt-1 block w-full p-2 border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-green-300">
            </div>
            
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-blue-800">Password:</label>
                <input type="password" name="password" required class="mt-1 block w-full p-2 border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-green-300">
            </div>
            
            <button type="submit" class="w-full bg-green-500 text-white font-semibold py-2 rounded-md hover:bg-green-600 transition">Login</button>
        </form>

        <p class="mt-4 text-center text-blue-800">Belum punya akun? <a href="{{ route('auth.register') }}" class="text-green-600 hover:underline">Daftar di sini, Angler!</a></p>
    </div>
</body>
</html>
