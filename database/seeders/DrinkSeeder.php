<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Drink;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    public function run(): void
    {
        $beer = Category::where('name', 'Beer')->first();
        $softDrinks = Category::where('name', 'Soft Drinks')->first();
        $juices = Category::where('name', 'Juices')->first();
        $spirits = Category::where('name', 'Spirits')->first();

        $drinks = [
            [
                'category_id' => $beer->id,
                'name' => 'Jupiler',
                'brand' => 'Jupiler',
                'calories_per_100ml' => 44,
                'alcohol_percentage' => 5.2,
            ],
            [
                'category_id' => $softDrinks->id,
                'name' => 'Coca-Cola',
                'brand' => 'Coca-Cola',
                'calories_per_100ml' => 42,
                'alcohol_percentage' => 0,
            ],
            [
                'category_id' => $juices->id,
                'name' => 'Orange Juice',
                'brand' => null,
                'calories_per_100ml' => 45,
                'alcohol_percentage' => 0,
            ],
            [
                'category_id' => $spirits->id,
                'name' => 'Vodka',
                'brand' => null,
                'calories_per_100ml' => 231,
                'alcohol_percentage' => 40,
            ],
        ];

        foreach ($drinks as $drink) {
            Drink::create($drink);
        }
    }
}
