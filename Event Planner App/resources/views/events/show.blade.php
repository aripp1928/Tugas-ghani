<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Acara - Fisher's Haven</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen" style="background-image: url('https://www.example.com/water-background.jpg'); background-size: cover; background-position: center;">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg text-center">
        <!-- Judul Acara -->
        <h1 class="text-3xl font-bold text-blue-800 mb-6">{{ $event->title }}</h1>
        
        <!-- Deskripsi Acara -->
        <p class="text-gray-700 text-lg mb-4">{{ $event->description }}</p>
        
        <!-- Detail Tanggal -->
        <div class="text-left mb-4">
            <p class="text-blue-600 font-semibold">Tanggal:</p>
            <p class="text-gray-800">{{ $event->date }}</p>
        </div>
        
        <!-- Detail Lokasi -->
        <div class="text-left mb-6">
            <p class="text-blue-600 font-semibold">Lokasi:</p>
            <p class="text-gray-800">{{ $event->location }}</p>
        </div>

        <!-- Tombol Kembali -->
        <a href="{{ route('events.index') }}" class="bg-green-500 text-white font-semibold py-2 px-6 rounded-md hover:bg-green-600 transition inline-block">Kembali ke Acara</a>
    </div>
</body>
</html>
