<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Beer',
            'Wine',
            'Spirits',
            'Soft Drinks',
            'Juices',
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate([
                'name' => $category,
            ]);
        }
    }
}
