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
        // for($i=0; $i<10; $i++) {
        //     Category::create([
        //         'name'=>fake()->firstName,
        //         'is_active'=>fake()->boolean,
        //     ]);
        // }
        $categories = [
            [
                'name' => 'Dumpling',
                'is_active' => 1,
            ],
            [
                'name' => 'Bread',
                'is_active' => 0,
            ],
            [
                'name' => 'Barbeque',
                'is_active' => 1,
            ],
            [
                'name' => 'Stew',
                'is_active' => 1,
            ],
            [
                'name' => 'Soup',
                'is_active' => 1,
            ],
            [
                'name' => 'Chicken/Pan-fried',
                'is_active' => 1,
            ],
            [
                'name' => 'Chicken/Cooked',
                'is_active' => 1,
            ],
            [
                'name' => 'Pork/Pan-fried',
                'is_active' => 1,
            ],
            [
                'name' => 'Appetizer',
                'is_active' => 1,
            ],
            [
                'name' => 'Dessert',
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
