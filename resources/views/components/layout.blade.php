@props(['title' => 'Default Title'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Navbar Component -->
    <x-navbar />

    <!-- Header Component -->
    <x-header>{{ $title }}</x-header>

    <!-- Konten Halaman Kosong -->
    <main class="flex-grow container mx-auto sm:px-6 lg:px-8 py-8">
        <!-- Taruh konten utama Anda di sini nanti -->
        <div>{{ $slot }}</div>
    </main>
</body>

</html>