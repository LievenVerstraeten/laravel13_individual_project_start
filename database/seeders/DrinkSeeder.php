<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Drink;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    public function run(): void
    {
        $drinks = [
            [
                'category' => 'Beer',
                'name' => 'Jupiler',
                'calories_per_100ml' => 44,
                'alcohol_percentage' => 5.2,
            ],
            [
                'category' => 'Wine',
                'name' => 'Red Wine',
                'calories_per_100ml' => 85,
                'alcohol_percentage' => 13,
            ],
            [
                'category' => 'Spirits',
                'name' => 'Vodka',
                'calories_per_100ml' => 231,
                'alcohol_percentage' => 40,
            ],
            [
                'category' => 'Soft Drinks',
                'name' => 'Coca-Cola',
                'calories_per_100ml' => 42,
                'alcohol_percentage' => 0,
            ],
            [
                'category' => 'Juices',
                'name' => 'Orange Juice',
                'calories_per_100ml' => 45,
                'alcohol_percentage' => 0,
            ],
        ];

        foreach ($drinks as $drink) {
            $category = Category::where('name', $drink['category'])
                ->firstOrFail();

            Drink::updateOrCreate(
                [
                    'category_id' => $category->id,
                    'name' => $drink['name'],
                ],
                [
                    'user_id' => null,
                    'calories_per_100ml' => $drink['calories_per_100ml'],
                    'alcohol_percentage' => $drink['alcohol_percentage'],
                ]
            );
        }
    }
}
