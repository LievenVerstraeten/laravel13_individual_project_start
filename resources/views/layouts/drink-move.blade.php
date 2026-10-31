@props(['title' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Drinks and Move' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col bg-warm-white text-dark-green">

<x-header>{{ $title ?? ''}}</x-header>

<main class="mx-auto py-8 flex-1 w-full md:w-4/5 lg:w-3/5">
    {{$slot}}
</main>

<x-footer />

</body>
</html>
