@props(['title' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Drinks and Move' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 text-gray-900">

<x-header>{{ $title ?? ''}}</x-header>

<main class="mx-auto w-3/5 py-8">
    {{$slot}}
</main>

<x-footer />

</body>
</html>
