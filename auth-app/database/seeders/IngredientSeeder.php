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
                'name' => 'Water (Warm)',
                'is_active' => 1,
            ],
            [
                'name' => 'Dry Yeast',
                'is_active' => 1,
            ],
            [
                'name' => 'Cheese',
                'is_active' => 1,
            ],
            [
                'name' => 'Eggs',
                'is_active' => 1,
            ],
            [
                'name' => 'Butter',
                'is_active' => 1,
            ],
            [
                'name' => 'Milk',
                'is_active' => 1,
            ],
            [
                'name' => 'Flour',
                'is_active' => 1,
            ],
            [
                'name' => 'Salt',
                'is_active' => 1,
            ],
            [
                'name' => 'Sugar',
                'is_active' => 1,
            ],
            [
                'name' => 'Olive Oil',
                'is_active' => 1,
            ],
            [
                'name' => 'Mozzarella',
                'is_active' => 1,
            ],
            [
                'name' => 'Yellow Onion',
                'is_active' => 1,
            ],
            [
                'name' => 'Tomato Paste',
                'is_active' => 1,
            ],
            [
                'name' => 'Eggplant',
                'is_active' => 1,
            ],
            [
                'name' => 'Sweet Red Peppers',
                'is_active' => 1,
            ],
            [
                'name' => 'Sweet Green Peppers',
                'is_active' => 1,
            ],
            [
                'name' => 'Green or Red Chilli',
                'is_active' => 1,
            ],
            [
                'name' => 'Large Tomato',
                'is_active' => 1,
            ],
            [
                'name' => 'Fresh Cinato',
                'is_active' => 1,
            ],
            [
                'name' => 'Garlic',
                'is_active' => 1,
            ],
            [
                'name' => 'Beef Stew Meat',
                'is_active' => 1,
            ],
            [
                'name' => 'Celery Ribs',
                'is_active' => 1,
            ],
            [
                'name' => 'Beef Broth',
                'is_active' => 1,
            ],
            [
                'name' => 'Bay Leaves',
                'is_active' => 1,
            ],
            [
                'name' => 'Uncooked White Rice',
                'is_active' => 1,
            ],
            [
                'name' => 'Fresh Parsley & Dill',
                'is_active' => 1,
            ],
            [
                'name' => 'Sunflower Oil',
                'is_active' => 1,
            ], 
            [
                'name' => 'Dried Red or Pinto Beans',
                'is_active' => 1,
            ], 
            [
                'name' => 'Fenugreek',
                'is_active' => 1,
            ], 
            [
                'name' => 'Cayenne Pepper',
                'is_active' => 1,
            ], 
            [
                'name' => 'Chicken Leg Quarters',
                'is_active' => 1,
            ], 
            [
                'name' => 'Red Adjika Paste',
                'is_active' => 1,
            ], 
            [
                'name' => 'Can Whole Peeled Tomatoes',
                'is_active' => 1,
            ], 
            [
                'name' => 'Cilantro',
                'is_active' => 1,
            ], 
            [
                'name' => 'Chicken',
                'is_active' => 1,
            ], 
            [
                'name' => 'Paprika',
                'is_active' => 1,
            ],
            [
                'name' => 'Lemon Wedges',
                'is_active' => 1,
            ],
            [
                'name' => 'Potatoes',
                'is_active' => 1,
            ],
            [
                'name' => 'Hot Pepper',
                'is_active' => 1,
            ],
            [
                'name' => 'Minced Pork',
                'is_active' => 1,
            ],
            [
                'name' => 'Minced Beef',
                'is_active' => 1,
            ],
            [
                'name' => 'Pork',
                'is_active' => 1,
            ],
            [
                'name' => 'Pomegranate Juice',
                'is_active' => 1,
            ],
            [
                'name' => 'Khmeli suneli',
                'is_active' => 1,
            ],
            [
                'name' => 'Coriander',
                'is_active' => 1,
            ],
            [
                'name' => 'Fresh Spinach',
                'is_active' => 1,
            ],
            [
                'name' => 'White Wine Vinegar',
                'is_active' => 1,
            ],
            [
                'name' => 'Blue Fenugreek',
                'is_active' => 1,
            ],
            [
                'name' => 'Pomegranate Seeds',
                'is_active' => 1,
            ],
            [
                'name' => 'Wheat',
                'is_active' => 1,
            ],
            [
                'name' => 'Raisins',
                'is_active' => 1,
            ],
            [
                'name' => 'White Cherry Jam',
                'is_active' => 1,
            ],
            [
                'name' => 'Wheat',
                'is_active' => 0,
            ],
            [
                'name' => 'Cornmeal',
                'is_active' => 1,
            ],
            [
                'name' => 'Concord Grape Juice',
                'is_active' => 1,
            ],
            [
                'name' => 'Hazelnuts',
                'is_active' => 1,
            ],
            [
                'name' => 'Walnuts',
                'is_active' => 1,
            ],
            [
                'name' => 'Honey',
                'is_active' => 1,
            ],
            [
                'name' => 'Lamb Mince',
                'is_active' => 1,
            ],
            [
                'name' => 'Basil',
                'is_active' => 1,
            ],
            [
                'name' => 'Tomato Puree',
                'is_active' => 1,
            ],
            [
                'name' => 'Lamb Stew Meat',
                'is_active' => 1,
            ],
            [
                'name' => 'Dry White Wine',
                'is_active' => 1,
            ],
            [
                'name' => 'Fresh Tarragon',
                'is_active' => 1,
            ],
            [
                'name' => 'Cherry Plums',
                'is_active' => 1,
            ],
            [
                'name' => 'Chicken Stock',
                'is_active' => 1,
            ],
            [
                'name' => 'Green Tkemali Sauce',
                'is_active' => 1,
            ],
            [
                'name' => 'Sour Cream',
                'is_active' => 1,
            ],
            [
                'name' => 'Beef',
                'is_active' => 1,
            ],
            [
                'name' => 'Cabbage',
                'is_active' => 1,
            ],
            [
                'name' => 'Chilli Flakes',
                'is_active' => 1,
            ],
            [
                'name' => 'Internals',
                'is_active' => 1,
            ],
            [
                'name' => 'Dried Coriander',
                'is_active' => 1,
            ],
            [
                'name' => 'Fresh Coriander',
                'is_active' => 1,
            ],
            [
                'name' => 'Carrots',
                'is_active' => 1,
            ],
            [
                'name' => 'Veal',
                'is_active' => 1,
            ],
            [
                'name' => 'Cumin',
                'is_active' => 1,
            ],
            [
                'name' => 'Cucumbers',
                'is_active' => 1,
            ],
            [
                'name' => 'Red Onion',
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
