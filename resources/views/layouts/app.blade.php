<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }} | HRIS</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="min-h-screen flex flex-col">
        {{-- Header --}}
        @include('components.header')

        <div class="flex flex-1">
            {{-- Sidebar --}}
            @include('components.sidebar')

            {{-- Konten Utama --}}
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>

        {{-- Footer --}}
        @include('components.footer')
    </div>

</body>
</html>
