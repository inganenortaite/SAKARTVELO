<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = [
            [
                'name' => 'Flour',
                'is_active' => 1,
            ],
            [
                'name' => 'Water (warm)',
                'is_active' => 0,
            ],
            [
                'name' => 'Dry yeast',
                'is_active' => 1,
            ],
            [
                'name' => 'Cheese',
                'is_active' => 1,
            ],
            [
                'name' => 'Egg',
                'is_active' => 1,
            ],
            [
                'name' => 'Butter',
                'is_active' => 1,
            ],
            [
                'name' => 'Sunflower oil',
                'is_active' => 1,
            ],
            [
                'name' => 'Salt',
                'is_active' => 1,
            ],
            [
                'name' => 'Milk',
                'is_active' => 1,
            ],
            [
                'name' => 'Chicken',
                'is_active' => 1,
            ],
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create([
                'name' => $ingredient['name'],
                'is_active' => $ingredient['is_active'],
            ]);
        }
    }
}
