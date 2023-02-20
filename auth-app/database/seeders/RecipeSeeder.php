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
        // for($i=0; $i<10; $i++) {
        //     Recipe::create([
        //         'name'=>fake()->name,
        //         'description'=>fake()->name,
        //         'is_active'=>fake()->boolean,
        //     ]);
        // }
        $recipes = [
            [
                'name' => 'Khachapuri',
                'category_id' => 2,
                'description' => 'Khachapuri can be called one of the famous dishes of Tbilisi, which represents Georgian culture. The fame of this dish is such that you can see it on the menu in most restaurants in Georgia. Bread, cheese, eggs and butter are used in cooking this dish. In making this dish, the bread dough is spread in the shape of an eye, cheese is added to it, and it is placed in the oven until the bread is toasted and the cheese melts on it. Then an egg is broken on it to be cooked on low heat, and at the end, it is greased with melted butter. As mentioned, you can see khachapuri on the menu of most restaurants in Tbilisi.',
                'is_active' => 1,
            ],
            [
                'name' => 'Mtsvadi',
                'category_id' => 3,
                'description' => 'Most Asian countries have some kebabs in their list of local dishes. In Georgia, Mtsvadi is also known as the local kebab of this country. This dish consists of grilled pieces of lamb, veal or pork and is often used in Georgian celebrations. Although the method of grilling is not different in all Georgian cities, such as Tbilisi or Batumi, the choice of meat may differ according to the region or city. Unlike Turkish and Armenian Mtsvadi, Georgians prefer to use only salt instead of using various sour seasonings as flavoring to preserve the natural flavor of the meat. Mtsvadi is a very suitable option for Georgian travelers after sightseeing in the city and the best option for choosing food on nature tours.',
                'is_active' => 1,
            ],
            [
                'name' => 'Ajapsandali',
                'category_id' => 4,
                'description' => 'Ajapsandali is another famous Georgian dish, considered a vegetable dish suitable for vegetarians. This dish uses eggplant, pepper, tomatoes, garlic, shallots, coriander and spices. Of course, some people cook Ajapsandali with red pepper and potato in addition to the mentioned vegetables. Usually, all the ingredients of Ajapsandali are Georgian vegetables, and summer is the best time to try it, but in other seasons it is easily found in all restaurants. Ajapsandali is available even in crowded markets and busy streets in Georgia because it is considered a traditional and widespread food with many fans.',
                'is_active' => 1,
            ],
            [
                'name' => 'Kharcho',
                'category_id' => 5,
                'description' => 'Kharcho is a kind of pureed soup and is considered one of the tastiest famous dishes of Tbilisi, which also has many fans among Georgian tourists. Some people believe that kharcho is a Russian dish, but this delicious dish has become so popular that Russians have included it in their list of winter dishes; it is Georgian. Kharcho is prepared from food items such as garlic, Sonali spice (a combination of five Georgian spices), coriander, chicken or beef and various other seasonings. In the preparation of kharcho, the meat is first seasoned and then marinated in a sauce consisting of walnuts. After a few hours, when the kharcho has settled in the sauce, it is served in a bowl with a special bread called shotti.',
                'is_active' => 1,
            ],
            [
                'name' => 'Lobio',
                'category_id' => 4,
                'description' => 'This simple dish is similar to Spanish beans, which should be simmered until tender. This dish has a great aroma and taste. It combines fried onions, coriander, vinegar, dried marigold flowers and pepper. The ingredients are mixed in a dish before serving, giving the beans a unique aroma and flavor. Beans are often served with grilled cornbread. This crispy bread, like a Mexican Dorito, is one of the few Georgian pieces of bread not baked in the oven. Cooking this bread is simple, and everyone can prepare this delicious bread from corn flour, salt and water in a copper dish.',
                'is_active' => 1,
            ],
            [
                'name' => 'Lobiani',
                'category_id' => 2,
                'description' => 'The first reason is that this delicious and small bread has a price of less than one dollar, and its volume is also good. But the more important reason is that this small bread is a unique blend of different flavors and textures that is very delicious. This food has a crispy and fragile surface like a croissant, and its soft bean core has a buttery and salty taste and aroma. Along the street where the Tbilisi History Museum is located, there is an unnamed staircase that leads to a busy underground. Following the crowd will reach the oldest bakery in town, where fresh lobiani is baked and sold.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chakhokhbili',
                'category_id' => 7,
                'description' => 'The name of Chakhokhbili stew is derived from the Georgian word “khokhobi,” which means pheasant because pheasant and beef were used in the original recipe of this dish in the past. In some restaurants, turkey, duck or chicken may be used instead of pheasant. Since chicken meat is used in Georgia today, it is often cooked with chicken. This delicious stew is generally served with bread.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chicken Tabaka',
                'category_id' => 6,
                'description' => 'Traditional Georgian food that is very popular among Iranian tourists is chicken Tabaka; chicken Tabaka is a type of fried chicken fried in a pan. It is also interesting to know that this dish can be ordered in all Eastern Europe and the Caucasus restaurants because of its excellent taste. Garlic or unique Georgian sauces are used for serving.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chanakhi',
                'category_id' => 8,
                'description' => 'A delicious dish prepared and cooked in clay dishes called Chanakhi is called Chanakhi. It is a kind of diced lamb roast placed inside the belly of an eggplant, and then the eggplant is grilled.',
                'is_active' => 0,
            ],
            [
                'name' => 'Khinkali',
                'category_id' => 1,
                'description' => 'Georgias most recognisable dish, khinkali, is something of a hybrid between Russian pelmeni, ravioli, and Chinese soup dumplings. Simple water-and-flour dough parcels are stuffed with various meat and non-meat fillings my favourites include potato and cheese, and Mountanier-style with pork and veal - before being boiled. Theres an art to eating khinkali: After dousing the plate with black pepper, its customary to first grab the dumpling by its doughy nipple, bite a small hole in the side and slurp out the juices. Its impolite to eat the knobbly bit of dough though, so just leave it on your plate.',
                'is_active' => 1,
            ],
        ];

        foreach ($recipes as $recipe) {
            Recipe::create([
                'name' => $recipe['name'],
                'category_id' => $recipe['category_id'],
                'description' => $recipe['description'],
                'is_active' => $recipe['is_active'],
            ]);
        }
    }
}
