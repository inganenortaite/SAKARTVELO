<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = [
            [
                'name' => 'Khachapuri',
                'category_id' => 32,
                'image' => file_get_contents('public/recipe_images/Olh5D2qrJZmJ45QNdGPdGX5k0UPCMii9USPLvUaD.jpg'),
                'description' => 'Khachapuri can be called one of the famous dishes of Tbilisi, which represents Georgian culture. The fame of this dish is such that you can see it on the menu in most restaurants in Georgia. Bread, cheese, eggs and butter are used in cooking this dish. In making this dish, the bread dough is spread in the shape of an eye, cheese is added to it, and it is placed in the oven until the bread is toasted and the cheese melts on it. Then an egg is broken on it to be cooked on low heat, and at the end, it is greased with melted butter. As mentioned, you can see khachapuri on the menu of most restaurants in Tbilisi.',
                'is_active' => 1,
            ],
            
        ];

        foreach ($recipes as $recipe) {
            Recipe::create([
                'name' => $recipe['name'],
                'category_id' => $recipe['category_id'],
                'image' => $recipe['image'],
                'description' => $recipe['description'],
                'is_active' => $recipe['is_active'],
            ]);
        }
    }
}
