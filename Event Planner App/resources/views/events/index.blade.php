<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100 min-h-screen p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-center text-green-700 mb-6">List Events</h1>

        <div class="mb-4 text-right">
            <a href="{{ route('events.create') }}" class="bg-green-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-green-600 transition">Create Event</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 border border-green-300 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full bg-blue-50 rounded-lg">
                <thead>
                    <tr class="bg-green-200 text-green-900">
                        <th class="py-2 px-4 text-left">Title</th>
                        <th class="py-2 px-4 text-left">Description</th>
                        <th class="py-2 px-4 text-left">Date</th>
                        <th class="py-2 px-4 text-left">Location</th>
                        <th class="py-2 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr class="border-b border-green-300">
                            <td class="py-2 px-4">{{ $event->title }}</td>
                            <td class="py-2 px-4">{{ $event->description }}</td>
                            <td class="py-2 px-4">{{ $event->date }}</td>
                            <td class="py-2 px-4">{{ $event->location }}</td>
                            <td class="py-2 px-4 space-x-2">
                                <a href="{{ route('events.edit', $event) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600 transition">Edit</a>
                                <a href="{{ route('events.show', $event) }}" class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition">View</a>
                                <form action="{{ route('events.destroy', $event) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
