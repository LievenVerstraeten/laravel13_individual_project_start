<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cocktail;
use App\Models\Drink;
use App\Models\SavedCalculation;
use App\Models\User;
use Illuminate\Database\Seeder;

class SavedCalculationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'test@example.com')->firstOrFail();

        $beer = Drink::where('name', 'Jupiler')->firstOrFail();
        $cola = Drink::where('name', 'Coca-Cola')->firstOrFail();
        $vodka = Drink::where('name', 'Vodka')->firstOrFail();
        $orangeJuice = Drink::where('name', 'Orange Juice')->firstOrFail();

        // Create a saved calculation
        $calculation = SavedCalculation::firstOrCreate(
            [
                'user_id' => $user->id,
                'total_calories' => 210,
            ],
            [
                'walking_minutes' => 30,
                'cycling_minutes' => 15,
            ]
        );

        // Create the individual items in the calculation
        $calculation->items()->delete();

        $calculation->items()->createMany([
            [
                'drink_id' => $beer->id,
                'drink_name' => $beer->name,
                'calories_per_100ml' => $beer->calories_per_100ml,
                'quantity' => 2,
                'serving_size_ml' => 250,
            ],
            [
                'drink_id' => $cola->id,
                'drink_name' => $cola->name,
                'calories_per_100ml' => $cola->calories_per_100ml,
                'quantity' => 1,
                'serving_size_ml' => 250,
            ],
        ]);

        // Create a cocktail
        $cocktail = Cocktail::updateOrCreate(
            [
                'user_id' => $user->id,
                'name' => 'Screwdriver',
            ],
            [
                'description' => 'A cocktail made with vodka and orange juice.',
            ]
        );

        // Add the ingredients and their quantities
        $cocktail->drinks()->sync([
            $vodka->id => ['quantity_ml' => 50],
            $orangeJuice->id => ['quantity_ml' => 150],
        ]);
    }
}
