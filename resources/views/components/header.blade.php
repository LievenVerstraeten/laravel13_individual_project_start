<div class="flex">
<header class="bg-red-600 shadow">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4">
        <a href="{{ route('home') }}" class="text-xl font-bold">
            Drink & Move
        </a>
        <h1>{{$slot}}</h1>

        <div class="flex gap-6">
            <a href="{{ route('walkcalculator') }}">Calculator</a>
            <a href="{{ route('cocktailcreator') }}">Cocktail Creator</a>
            <a href="{{ route('drinkhistory') }}">Drink History</a>
        </div>
    </nav>
</header>
</div>
