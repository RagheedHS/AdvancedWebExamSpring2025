<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="bg-blue-600 p-4">
            <div class="container mx-auto">
                <div class="flex justify-between">
                    <div class="text-white">
                        <a href="{{ url('/') }}" class="mr-4">Home</a>
                        <a href="{{ url('/students') }}" class="mr-4">Students </a>
                        <a href="{{ url('/courses') }}" class="mr-4">Courses </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mx-auto mt-4">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/search.js') }}"></script>
</body>
</html>
