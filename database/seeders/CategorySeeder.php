<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Beer',
                'description' => 'Alcoholic beer and similar drinks.',
            ],
            [
                'name' => 'Wine',
                'description' => 'Red, white and rosé wines.',
            ],
            [
                'name' => 'Spirits',
                'description' => 'Vodka, rum, gin and other spirits.',
            ],
            [
                'name' => 'Soft Drinks',
                'description' => 'Non-alcoholic carbonated drinks.',
            ],
            [
                'name' => 'Juices',
                'description' => 'Fruit juices and other juice drinks.',
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['name' => $category['name']],
                ['description' => $category['description']]
            );
        }
    }
}
