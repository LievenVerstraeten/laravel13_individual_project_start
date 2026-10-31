<header class="w-full bg-green-700 shadow">
    <nav class="grid w-full grid-cols-3 items-center px-4 py-5">
        <div class="flex justify-center">
        <a href="{{ route('home') }}" class="text-xl font-bold">
            Drink & Move
        </a>
        </div>
        <div class="flex justify-center">
        <h1 class="text-xl font-bold">{{$slot}}</h1>
        </div>

        <div class="flex gap-6">
            <a href="{{ route('walkcalculator') }}">Calculator</a>
            <a href="{{ route('cocktailcreator') }}">Cocktail Creator</a>
            <a href="{{ route('drinkhistory') }}">Drink History</a>
        </div>
    </nav>
</header>
