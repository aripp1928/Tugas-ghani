<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen" style="background-image: url('https://www.example.com/water-background.jpg'); background-size: cover;">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-semibold text-center text-green-700 mb-6">Edit Your Event</h1>

        <form action="{{ route('events.update', $event) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Event Title</label>
                <input type="text" name="title" value="{{ $event->title }}" class="mt-1 block w-full p-2 border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-green-300" required>
            </div>
            
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" class="mt-1 block w-full p-2 border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-green-300" rows="4">{{ $event->description }}</textarea>
            </div>
            
            <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Event Date</label>
                <input type="date" name="date" value="{{ $event->date }}" class="mt-1 block w-full p-2 border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-green-300" required>
            </div>
            
            <div>
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <input type="text" name="location" value="{{ $event->location }}" class="mt-1 block w-full p-2 border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-green-300">
            </div>
            
            <button type="submit" class="w-full bg-green-500 text-white font-semibold py-2 rounded-md hover:bg-green-600 transition">Update Event</button>
        </form>
    </div>
</body>
</html>
