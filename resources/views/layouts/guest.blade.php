<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Jejak Tsunami') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-50">

    <div class="min-h-screen flex flex-col items-center pt-8 sm:pt-0 sm:justify-center">

        <div class="mb-6 flex items-center gap-3">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-10 h-10 object-contain">
            <div>
                <p class="font-bold text-xl tracking-wide text-sky-700 leading-none">Jejak Tsunami</p>
                <p class="text-xs text-slate-500">Museum Tsunami Aceh</p>
            </div>
        </div>

        <div class="w-full sm:max-w-md px-6 py-8 bg-white shadow-sm border overflow-hidden sm:rounded-xl">
            {{ $slot }}
        </div>

        <a href="{{ route('home') }}" class="mt-6 text-sm text-sky-600 hover:underline">&larr; Kembali ke beranda</a>

    </div>
</body>
</html>