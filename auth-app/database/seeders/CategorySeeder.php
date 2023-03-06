<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Salad Recipes',
                'is_active' => 1,
            ],
            [
                'name' => 'Bread',
                'is_active' => 0,
            ],
            [
                'name' => 'Main-Course Recipes',
                'is_active' => 1,
            ],
            [
                'name' => 'Side-Dish Recipes',
                'is_active' => 1,
            ],
            [
                'name' => 'Baked-Goods Recipes',
                'is_active' => 1,
            ],
            [
                'name' => 'Dessert Recipes',
                'is_active' => 1,
            ],
            [
                'name' => 'Breakfast Recipes',
                'is_active' => 1,
            ],
            [
                'name' => 'Lunch Recipes',
                'is_active' => 1,
            ],
            [
                'name' => 'Dinner Recipes',
                'is_active' => 1,
            ],
            [
                'name' => 'Snack Recipes',
                'is_active' => 1,
            ],
            [
                'name' => 'Soup Recipes',
                'is_active' => 1,
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'is_active' => $category['is_active'],
            ]);
        }
    }
}
