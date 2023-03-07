<?php

namespace Database\Seeders;

use App\Models\Recipe;
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
                'category_id' => 5,
                'image' => '/public/recipe_images/Olh5D2qrJZmJ45QNdGPdGX5k0UPCMii9USPLvUaD.jpg',
                'description' => 'Khachapuri can be called one of the famous dishes of Tbilisi, which represents Sakartvelo culture. The fame of this dish is such that you can see it on the menu in most restaurants in Sakartvelo. Combine flour, salt, yeast, and sugar in a bowl. Then add warm milk. Using the hook attachment, knead the dough until it takes shape. Then add oil and knead some more. Place the dough in a greased bowl. Cover and let it double in size. Remove from bowl and divide the dough into 4 boat-shaped pieces. Place the bread boast on a baking sheet lined with parchment. Combine the three kinds of cheese and fill each bread boat. Using a pastry brush, brush with egg wash and bake for 15 minutes at 450 degrees Fahrenheit. Pull the khachapuri out of the oven, then make a well in the middle. Drop the egg in the center, add pieces of butter to the melted cheese, and bake for another 5-6 minutes.',
                'is_active' => 1,
            ],
            [
                'name' => 'Ajapsandali',
                'category_id' => 8,
                'image' => '/public/recipe_images/Olh5D2qrJZmJ45QNdGPdGX5k0UPCMii9USPLvUaD.jpg',
                'description' => 'This delicious stewed eggplant dish is a staple on most Sakartvelian tables. Typically served cold the day after preparation, this delicious vegetable dish packs a lot of flavour in just a few simple ingredients. Heat 1 tablespoon of vegetable oil in a large saucepan over medium-low heat until shimmering. Add onions and cook until translucent but not browned, about 5 minutes. Add the tomato paste and stir until well-combined and fragrant, about 1 minute. Add eggplant and about 1 teaspoon of salt to encourage moisture release. Stir to combine and cover, cooking for about 5 minutes, or until the eggplants release a fair amount of moisture and decrease in size. Add peppers, chilli and tomato, stir to combine, cover and simmer, adding a bit of water if necessary to thin out the stew. Cook for about 10-20 minutes until eggplants are completely cooked through and the mixture is homogenous and flavourful. Add garlic and half of the cilantro, stir to combine and cook for about 2-3 more minutes. Turn off heat and add remaining cilantro. Allow to cool slightly before transferring to an airtight container and refrigerating for a few hours, preferably overnight. Serve cold.',
                'is_active' => 1,
            ],
            [
                'name' => 'Kharcho',
                'category_id' => 11,
                'image' => '/public/recipe_images/F9xjyNibNk107bSB6HkLkZq4MfckEgMD0lF9nDvv.jpg',
                'description' => 'Beef Soup Kharcho (pronounced harcho), is a hearty beef soup in tomato broth with a wonderful blend of spices and plenty of fresh herbs. Sprinkle meat with 3 tsp salt and stir. Heat dutch oven or soup pot over medium high heat and add 2 Tbsp oil. Once oil is hot, add beef in 2 batches, sautéing until browned on all sides. Remove from pot and set aside. Do not worry about cooking it through. Add chopped onion and celery with more oil as needed. Saute 5 min until softened. Add canned tomatoes with their juice, 4 cups broth, 4 cups water, 2 bay leaves and browned beef. Bring to a boil then reduce heat, cover and simmer 1 1/2 to 2 hours or until beef is tender. Add 1/2 cup white rice, 2 Tbsp lemon juice, 2 pressed garlic cloves, 1 tsp coriander, 1 tsp paprika. Cover and simmer 20 min or until rice is tender. Remove from heat and add 1/4 cup parsley and 1/4 cup dill then cover and let sit off heat another 10 min before serving. Season to taste with salt and pepper and serve with more fresh herbs as desired.',
                'is_active' => 1,
            ],
            [
                'name' => 'Lobio',
                'category_id' => 3,
                'image' => '/public/recipe_images/gGJaUl16mpcyM9Ci3YxdXAyFJom2CjN5z75D0EUH.jpg',
                'description' => 'This spiced red bean stew is a staple on Sakartvelian tables. Simple to make yet incredibly delicious, this bean dish is sure to become a favourite. It is typically served with a side of mchadi and various pickled vegetables. The night before, dissolve 15 grams of salt per 1 litre of cold water in a large bowl or container. Rinse beans in a colander and transfer to prepared brine. Soak beans for at least eight and up to 24 hours.Drain and rinse beans and transfer to a large saucepan. Cover with about 5 centimetres of cold water seasoned with 1-2 teaspoons of salt. Bring to a simmer and cook until beans are tender, about 1-1.5 hours. Drain beans, reserving about 500 millilitres of cooking liquid. Transfer to a bowl and set aside. In a separate bowl, combine walnuts, garlic, fenugreek, coriander, savory, cayenne pepper and 2/3 of the cilantro and mix until the walnuts are moist. Heat 1 tablespoon of vegetable oil in a heavy saucepan over medium-low heat until shimmering, add onions and saute until translucent but not browned, about 5 minutes. Add walnut mixture and cook, stirring constantly, until fragrant, about 1 minute. Add tkemali or pomegranate juice (or lemon juice), stir to combine. Add cooked beans to pot along with about 150 millilitres of the reserved cooking liquid. Using a potato masher, mash beans until only about 1/4 of them are whole, adding more cooking liquid as necessary to loosen the consistency - it should be the consistency of a thick stew, not too soupy. Allow to simmer for about 5 minutes while flavours meld, add remaining cilantro, and serve immediately.',
                'is_active' => 1,
            ],
            [
                'name' => 'Lobiani',
                'category_id' => 5,
                'image' => '/public/recipe_images/rD80pjSINz71vS27ETvLy8E7jPhxfoLMQ5CIWxnJ.jpg',
                'description' => 'This stuffed Sakartvelian bread dish is a healthier cousin to the much-loved khachapuri. Simple to make and delicious to eat, this lobiani recipe is sure to become a household favourite. Dough: Dissolve sugar in milk and stir in yeast until combined, set aside until foamy, about 5-10 minutes. Whisk flour and salt together in a large bowl, make a well in the centre and add egg, milk and yeast mixture and oil. Stir until combined and a shaggy dough forms. Turn out onto a lightly floured surface and knead dough until smooth and slightly tacky, about five minutes, kneading in more flour if the dough is too sticky. Transfer dough into a large, clean, oiled bowl, cover with plastic wrap or a damp towel and set aside at room temperature until nearly doubled in size, about 1-2 hours depending on how warm the room is. Filling: Drain beans and transfer to a large bowl. With a potato masher, mash beans until smooth. Add butter, savory, blue fenugreek, cayenne pepper and salt and pepper to taste. Stir until well combined. Set aside. Assembly: Preheat oven to 200°C (400°F). Line a baking sheet with parchment paper and position a rack in centre of oven. Lightly deflate dough and turn out onto a lightly floured surface, roll out the dough in a circle until about 4-5 (1/4 inch) millimetres thick. Place bean filling in the centre of the dough circle, leaving about 8 centimetres (3 inches) in diameter on all sides. Fold remaining dough over beans until the filling is completely covered by dough. Roll your rolling pin the dough over the beans, sealing it in and ensuring an even thickness of the crust. Roll out your lobiani until it reaches about 25 centimetres in diameter. Cut four 2.5 centimetre-long (1 inch) slits in the centre of the dough, for steam release. Transfer to oven for 10-15 minutes, or until lightly browned, crisp, and cooked through. Cut into wedges (like a pizza) and serve immediately.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chakhokhbili',
                'category_id' => 11,
                'image' => '/public/recipe_images/4IhchXdKr1lrsWuOLZB3U9HeZIaIpYXXNLtxrjYP.jpg',
                'description' => 'This Sakartvelian chicken dish is easy to make and incredible flavourful - it also comes together is about an hour, meaning that it is quick enough for a weeknight meal! Pat the chicken dry and season liberally with salt and pepper. Set and large dutch oven or pot over medium heat and add one tablespoon of neutral oil. Heat the oil until it begins to shimmer and add half of your chicken. Cook on one side until deeply browned and it releases easily from the pan. Flip and repeat - about 4-6 minutes per side. Remove from the pan and set aside on a plate. Repeat with the remaining chicken. Discard all but 2 tablespoons of rendered fat from the pot and add the onion along with a small pinch of salt. Sweat the onion until it is softened but not browned, about 5-7 minutes, scraping up any browned bits from the chicken as the onions release their moisture. Add the adjika and tomato paste and cook until very fragrant and the tomato paste begins to darken in colour, about 2 minutes. Add the garlic and cook just until fragrant, about 30 seconds. Add the tomatoes and any juice in the can. Stir to combine with the onions and adjika mixture. Return the chicken to the pot along with any accumulated juices ensuring the legs and thighs are well-nestled in the sauce. Reduce the heat to medium-low, cover, and cook until the chicken is tender and the sauce is deeply flavourful about 45 minutes. Remove the chicken from the pot and add the cilantro. Stir to combine and cook for another five minutes, adjusting for seasoning if needed. Portion the chicken onto plates, spooning the sauce over the chicken.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chicken Tabaka',
                'category_id' => 3,
                'image' => '/public/recipe_images/7qtXHtOWc8fl1rSXO4JBlXFCiaDrRs6wrDpUoXQE.jpg',
                'description' => 'Chicken Tabaka is a western Sakartvelian dish where a whole chicken is flattened and pan-fried while being weighed down by another pan or heavy object. The chicken ends up golden brown and crispy on the outside while staying juicy inside. It is so delicious and simple that it has become wildly popular in homes and restaurants across the Caucasus, Central Asia and Eastern Europe countries. Slice the chicken down the center of the breastbone using a sharp knife or kitchen shears. Open the chicken and press it down flat, skin-side up. (Note: you can also flatten the chicken using the spatchcock method of cutting out the backbone.) Cover the chicken with a piece of parchment or plastic wrap, and using a meat mallet or rolling pin, lightly pound on the chicken to flatten it. Season the chicken generously with salt, add the paprika, and rub the salt and spice all over both sides. Over medium-low heat, add a generous drizzle of oil to a large cast iron or heavy bottomed skillet. Once the pan is hot, add the chicken skin-side up. Place a clean, heavy object on top of the chicken to weigh it down, such as a second cast iron skillet, a sheet pan topped with a large pot, or bricks wrapped in foil. Let the chicken cook for 25 minutes, maintain a medium-low heat, and occasionally rotate the pan if your burner cooks unevenly. After 25 minutes, flip the chicken so that it is now skin-side down, and cook for an additional 25-30 minutes, or until the juices run clear when pierced, or it reaches an internal temperature of 165 degrees F when tested with a meat thermometer. Once cooked, transfer the chicken to a serving dish and allow it to rest for 15 minutes. While it rests, prepare the garlic sauce. Over medium heat, add a drizzle of oil to the same pan you cooked the chicken in. Add the minced garlic to the pan, and sauté for 2-3 minutes, or until the garlic is aromatic but not browned. Add ¾ cup of water, scrape off all the delicious bits in the pan, and allow the mixture to simmer and reduce for another 3-4 minutes. Turn off the heat, and add the chopped cilantro. Taste and season with salt and pepper. Spoon the sauce over the chicken just before serving, or serve the sauce on the side.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chanakhi',
                'category_id' => 9,
                'image' => '/public/recipe_images/AOrIT30lU3n78h2mUkTOW4zHO8uH3Kw9u2766Knj.jpg',
                'description' => 'This stew is assembled in layers with meat on the bottom of the pot, onions, eggplant, peppers, potatoes, fresh herbs and tomatoes piled on top. A low slow oven braise brings it all together and yields a delicious and satisfying stew with meltingly tender lamb and vegetables, and rich flavorful sauce. If the eggplants come in bitter varieties, cut into large pieces, salt, leave for half an hour aside, then drain the juice that has separated. But it should be noted that for many years markets and supermarkets have been selling eggplants without bitterness. Let them go straight away. All vegetables and meat are fried before baking. The sequence is not critical. So, put eggplants in hot vegetable oil and fry for several minutes over high heat until golden brown. Transfer. Add vegetable oil gradually and keep the pan cool. Fry the coarsely chopped bell peppers. Fry the potatoes, cut them into large pieces. Saute the onions chopped in strips until soft. Saturate and lightly brown the beef. By the way, this dish is often prepared with lamb. Fill the pots in layers, add butter (or fat tail fat) and spices between the layers. Place a slice of butter and beef pulp on the bottom first. Add onions, add some butter, add salt. Add the eggplant and potatoes, then fresh coarsely chopped tomatoes. And cover with oiled bell peppers. Top with chopped fresh herbs, garlic, and chopped hot peppers. Replace the lids and place them in the preheated oven for about 1 hour. Simmer canakhi with beef at 180 degrees. Sprinkle with fresh herbs when serving.',
                'is_active' => 1,
            ],
            [
                'name' => 'Khinkali',
                'category_id' => 3,
                'image' => '/public/recipe_images/OIuusE05lYn6khfx72IPCzPztcboGKSF7GretpVB.jpg',
                'description' => 'These Sakartvelian soup dumplings are one of the country most famous dishes. Flavourful and surprisingly fun and easy to make, they are perfect for those wanting to create a Sakartvelian feast at home. In a large mixing bowl (or the bowl of a stand mixer), whisk together the flour and the salt. Make a well in the flour and add the egg and the oil. If using a stand mixer, fit it with the dough hook attachment and mix on low until a shaggy dough forms - about 2-3 minutes. If making the dough by hand, mix with a wooden spoon until you have a dry, shaggy dough. If using a stand mixer, increase the speed to medium-low and slowly stream in the water until the dough pulls away from the sides, gathers around the hook and there are no dry spots of flour remaining. You may not need to add all 85ml of water, so make sure to work very slowly. If making the dough by hand, add the water a little at a time, stirring with a wooden spoon, until a shaggy dough forms but there are no dry spots of flour. You may not need to use all of the water. If using a stand mixer, knead the dough on medium-low for about 5-10 minutes or until it is supple, pliable and elastic. It should not be sticky. If making the dough by hand, turn the dough out onto a clean countertop. Knead for 10-15 minutes, or until the dough is supple, pliable and elastic. Return the dough to the bowl, cover the bowl with a damp towel or plastic wrap, then allow to rest at room temperature for at least one hour. While the dough is resting, make the filling. In a large bowl, combine the pork, beef, onion, garlic, cilantro and chili flakes. Season generously with salt and pepper. Stir until thoroughly combined. Set aside. Once the dough has rested, divide it into quarters keeping 3/4 of the dough covered tightly while working with each section. Very lightly dust a clean work surface with flour (see note 5) and, using a rolling pin, roll the dough until it is about 1mm thick. Using a 10cm (4-inch) circular cutter, punch out as many rounds as you can get from the dough. Gather the scraps and cover - they can be re-rolled and punched out again, but rest the dough for at least 10 minutes. Working one dough round at a time, very gently stretch the round until it is paper thin and you can see some light passing through it. Place the round on your work surface and add about 15g worth of (1/2oz) filling in the centre of the dough. Lift one side of the dough with both hands, holding between your thumb and forefinger about 1 centimetre apart. Fold the dough in your non-dominant hand to your dominant hand, pinch to seal. Repeat until there is no more dough to fold. Twist the top of the dumpling to completely seal. If desired, use scissors to snip the very tip of the twisted top from the dumpling. Set aside and repeat with remaining dough and filling. Bring a large pot of water to a rolling boil over high heat. Gently add your khinkali and boil for 7 minutes, until completely cooked through. Remove with a slotted spoon. Top with freshly ground black pepper and serve immediately.',
                'is_active' => 1,
            ],
            [
                'name' => 'Mtsvadi',
                'category_id' => 3,
                'image' => '/public/recipe_images/v7wCrSDzoHiPUBEAAYTqTdjxqv8eKzsyL9C7F1A4.jpg',
                'description' => 'Mtsvadi is traditional Sakartvelian barbeque, very juicy and delicious. Sakartvelo Kakheti region is especially famous for preparing most delicious barbeque in whole country. Sakartvelian barbeque can be made from pork and veal as well, yet pork mtsvadi is more popular. If you prepare mtsvadi with this kind of marinade, you will end up eating most tender and juicy barbeque ever. Cut meat in medium size cubes. Slice onion rings. Mix meat and onion together, add khmeli suneli, ground coriander seeds, black pepper and salt. Pour pomegranate juice, oil to the mixture and mix up well. Cover meat with lid or plate and place marinade in the fridge. It is recommended to keep marinade in the fridge for two days to let meat absorb all the flavors and juices. Put meat slices on spit and fry on coal rotating time by time. When barbeque is ready garnish with fresh slices of onion and serve.',
                'is_active' => 1,
            ],
            [
                'name' => 'Pkhali',
                'category_id' => 10,
                'image' => '/public/recipe_images/1uengrBDjjlvXNcSixU6kQC8QZQx0aJmAyAIE1vr.jpg',
                'description' => 'This spinach and walnut spread is a typical first course on a Sakartvelian table. Easy to throw together, flavourful and healthy, it is sure to be a hit on your own table, as well! Bring a large pot of water to a boil over high heat. Add spinach, stir and cook for one minute. Drain in a colander, pressing on the spinach with the back of a spoon to release as much moisture as possible. Set aside. In the bowl of a food processor, pulse the walnuts and garlic until ground fine and the consistency resembles wet sand. Scrape down sides of bowl and add the spinach and cilantro. Pulse until well-combined and homogenous. Transfer contents to a large mixing bowl and add vinegar, coriander, blue fenugreek, cayenne and oil, stir to combine. Add salt and pepper to taste. Cover with plastic wrap and refrigerate mixture until it is firm, about one hour. With clean hands, shape the pkhali into small balls, 4-6 in total depending on the size you prefer. Garnish with pomegranate seeds, serve and enjoy!',
                'is_active' => 1,
            ],
            [
                'name' => 'Korkoti',
                'category_id' => 6,
                'image' => '/public/recipe_images/yInzy2P9UK6rcIijWwelFz9qUfM81b5KrxeJJgpR.jpg',
                'description' => 'Korkoti is also known in different parts of Sakartvelo as Tsandili and Kolio. This porridge-like dessert has a spiritual significance and is mainly prepared to commemorate the deceased. Korkoti is often made during Easter celebrations. There are several variations of Korkoti belonging to different regions, but normally it is made with wheat grains, honey, and raisins. To prepare this delicious dessert, the wheat grains have to be soaked in water for a minimum of six hours or ideally overnight. After draining, the grains are poured into a saucepan, covered with water, and boiled until soft. This process takes up to one hour. After the wheat grains have softened, the honey, sugar and raisins are added. Some people add walnuts to give it a crunchy texture. Kokorti is served cold and eaten with a spoon. Tsandili can be found in some restaurants and cafes in bigger cities, including in Kutaisi.',
                'is_active' => 1,
            ],
            [
                'name' => 'Pelamushi',
                'category_id' => 6,
                'image' => '/public/recipe_images/BUDuVrUImF74yvFWwIrz72XHKg8Uitarhh14WKha.jpg',
                'description' => 'Pelamushi is a sweet dish that resembles a frozen pudding. Sakartvelians usually prepare it in cold season using grape juice and walnuts. More specifically, pelamushi is the shell of Imeretian churchkhela. Whisk together the flour, cornmeal, salt and grape juice in a large saucepan over medium-high heat. Bring to a boil, stirring occasionally; cook for 1 minute, then reduce the heat to medium-low; cook for about 20 minutes, stirring often, until the mixture has reduced by about one-third and you can no longer taste the flour. Divide the mixture among individual ramekins. Place them in the refrigerator to chill and set for several hours or up to overnight. Preheat a toaster oven or oven to 300 degrees. Line a small baking pan with parchment paper. Bring the honey to a boil in a small saucepan over medium-high heat; it will look sudsy. Stir in the nuts until evenly coated; remove from the heat after 30 seconds. Spread the nuts in the baking pan and sprinkle lightly with salt; bake for 10 minutes, then transfer the nuts to a wooden cutting board to cool, turning them over after 2 or 3 minutes and breaking apart any large chunks. Serve the chilled puddings in their ramekins, or turn them out onto individual plates. Garnish with the honeyed hazelnuts and a sprinkling of salt.',
                'is_active' => 1,
            ],
            [
                'name' => 'Gozinakis',
                'category_id' => 6,
                'image' => '/public/recipe_images/8gO4tpDYJ1DksOTim7Z6doNjMjmXCQdrsfyQ2M4p.jpg',
                'description' => 'In Sakartvelo, Gozinakis are usually made in celebration of the New Year. There are different recipes, some call for hazelnuts and others, almonds. The best gozinakis are made using honey from the mountains; choose a fragrant, wildflower honey if possible. The crisps will keep for several days in a well-sealed container… if it is well hidden! Cut walnuts in thin slices and lightly roast them. Heat the honey in a heavy-bottomed frying pan, on medium-low fire. When the honey starts making bubbles, let it boil for about 2-3 minutes, stirring constantly. Then put the honey aside and let it cool. Repeat this two or three  times to caramelize the honey. Heat the honey one more time and add roasted walnuts. Stir quickly and continue to cook on a low heat, about 5-7 minutes. Pour the honey-nuts mixture on a wet wooden board and flatten it with a moist wooden spoon or rubber spatula. With the help of a wet wooden dough-roller create a ½ inch thick rectangular layer. Let it cool 10 minutes. With a large knife cut Gozinaki into diamonds.',
                'is_active' => 1,
            ],
            [
                'name' => 'Tatara',
                'category_id' => 6,
                'image' => '/public/images/Tatara.jpg',
                'description' => 'Tatara is extremely delicious silky Sakartvelian pudding made from organic grape juice and flour. The key ingredient for preparing good and real tatara is badagi, thick grape juice that determines the taste and aroma of pudding. You can consume grape pudding both warm and cold, it is equally tasty. Here is the recipe: In order to get badagi, boil fresh grape juice in the saucepan until it thickens and reduces by half. You can add little bit of sugar as well to your taste. When badagi is ready mix it up together with sifted flour. Pour the mixture in the heavy saucepan with a thick bottom and place on the stove over low heat, continuously stirring with wooden spoon. When tatara thickens and starts to boil, add sugar little by little to your taste. Simmer tatara for 3-5 minutes. When it is ready and does not taste flour, pour tatara on the plate or mold and garnish with chopped walnuts. You can consume it warm right away; or place in fridge to cool down and eat as a cold pudding.',
                'is_active' => 1,
            ],
            [
                'name' => 'Kaklucha',
                'category_id' => 6,
                'image' => '/public/recipe_images/tfg4uLDbswt14sDEY1mjFNAERLsaOTvFwGwPE7Rp.jpg',
                'description' => 'Kaklucha might not be as popular as Churchkhela, but this special Sakartvelian treat has an equally interesting history. Also known as Royal Candy or Orbelianis Candy, Kaklucha was invented by Mariam Orbeliani and her cook, Pelagia, in the 19th century. Mariam was the daughter of poet Prince Vakhtang Orbeliani, who belonged to the noble House of Orbeliani. Kaklucha is made with walnuts and caramelised sugar and tastes like heaven! Even though the main ingredients are simple, the flavours and textures are quite complex. Every tiny truffle-like candy is like a miniature candy apple, with a hard crystalised shell, a creamy inner filling, and a single piece of crunchy walnut inside.',
                'is_active' => 1,
            ],
            [
                'name' => 'Kababi',
                'category_id' => 9,
                'image' => '/public/recipe_images/UuGzdauMRjjddIgXyulZBPlkWYy6RF7gULtXyIeo.jpg',
                'description' => 'Kababi is a very popular meal in Sakartvelo and can be flavored with a variety of spices. In this recipe we show how to make kababi wrapped in thin lavashi bread and flavored with spices and pomegranate juice. We have also included a recipe for a spicy tomato sauce to serve with the kababi. Preheat the oven to 200C. Heat a little oil and fry the onion gently for about 5 minutes until softened but not browned. Leave to cool. Put all the ingredients for the kebabs in a bowl and mix together with your hands. Divide the mixture into 6 equal balls then make each one into a fat sausage shape. Heat a little more oil in the frying pan and brown the kebabs on each side then transfer them to a baking tray lined with baking parchment. Cook the kebabs in the oven for about 18-20 minutes. Serve with all the accompaniments.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chakapuli',
                'category_id' => 11,
                'image' => '/public/recipe_images/9b8cshGyHT4YXdtDp1L9IgG7vbG7cD4A4G1XBOMo.jpg',
                'description' => 'Chakapuli is a traditional Sakartvelian dish made with lamb or beef, believed to have originated in the region of Kakheti, which includes the city of Telavi. The Chakapuli, next to the Chanakhi, are counted as one of Sakartvelian most served lamb stews. The lamb of this food was traditionally cooked in a clay pot called “Chakapuli” or “Kukhuri.” This Sakartvelian dish has a long history, with references to it dating back to the 17th century. Preheat oven to 160°C/320°F. Pat lamb dry with paper towels and season generously with salt and pepper. Over medium heat in a large Dutch oven or oven-safe pot, heat a tablespoon of neutral oil until shimmering. Working in batches, sear the meat until it is well browned on all sides. Transfer to a plate and set aside. Reduce heat to medium-low. Add onion and cook, stirring occasionally, until well-softened, about 5 minutes, scraping up any browned bits as the onions release their moisture. Add garlic and cook until just fragrant, about 30 seconds. Pour in wine and bring to a simmer. Cook until the alcohol smell has dissipated and it has reduced slightly, about 5 minutes. Take this time to scrape up any remaining browned bits from the bottom of the pan. Add the lamb back into the pot along with any accumulated juices. Add the tarragon bundle and the plums, if using. Pour over the chicken stock and bring to a gentle simmer. Turn off the heat and over the pot. Transfer to the oven and cook until lamb is very tender and the stew is fragrant, about two hours. Remove the pot from the over, uncover, remove the tarragon bundle and bring to a simmer over low heat. Stir in tkemali sauce and allow to simmer until the sauce is reduced and thickened slightly, about 30 more minutes. Portion into bowls and serve immediately, preferably with a side of crusty bread and a Sakartvelian amber wine.',
                'is_active' => 1,
            ],
            [
                'name' => 'Matsoni',
                'category_id' => 6,
                'image' => '/public/recipe_images/iDa6iZIaa79Bs9kSRGc5pmSvRAClF1qUTwrd23r4.jpg',
                'description' => 'Since the first time Matsoni was mentioned in writings dates back to the 11th century, it is believed that people in the area consumed this type of soured milk for centuries. However, this type of yogurt is likely much older. In cold cellars, milk was soured to be used later for cheese and butter making. In an area where summer temperatures can be pretty high, soured milk was available for a longer time than fresh milk and consumed a lot as it was. Take a pot, pour milk into it and place it on high heat. Let it reach 90ºC. Set the milk aside to cool down to 40º-50ºC. It takes about an hour to cool down. After an hour, take the foam off the surface of the milk. Add sour cream to the milk pot containing the milk, stirring well. Keep the Matsoni warm for about 4 hours after transferring to jars. You can keep Matsoni warm by wrapping the jars with towels and placing them next to a warm stove or on a warmer plate. It wont take you long to notice that the milk thickens after that time. The Matsoni should be refrigerated for at least 8 hours so they can settle and ripen. Some people keep Matsoni for three days in the refrigerator before consuming it.',
                'is_active' => 1,
            ],
            [
                'name' => 'Tolma',
                'category_id' => 3,
                'image' => '/public/recipe_images/oVNrnnhFubIyFYZWotDToYpNO2KTsAJRstjy14xh.jpg',
                'description' => 'Sakartvelian Tolma can be made with different types of vegetables like tomato, eggplant, and zucchini, but in Sakartvelian cuisine, the most common types are made with bell peppers and vine or cabbage leaves. Cut off the bottom of the cabbage and take off the outside leaves. Cut the core out of the cabbage. Place the cabbage in a large pot with salted boiling water. When the leaves are boiled and soften, carefully peel them off one by one.Take the cabbage leaves out on a plate and let them cool down completely. With a sharp knife cut off the thick vein in the center of each leaf. For the filling combine the ground beef, onion, garlic, seasonings and herbs in a medium bowl. Place about one tbsp of the beef filling onto the center of each cabbage leaf. Roll the leaf around the filling, folding in sides. Place cabbage rolls in a thick-bottomed pot. For the sauce combine the tomato paste, salt and water. Pour sauce over the cabbage rolls. Cover and cook for about 1 hour. Serve hot.',
                'is_active' => 1,
            ],
            [
                'name' => 'Kuchmachi',
                'category_id' => 9,
                'image' => '/public/recipe_images/Adfciwkthk8QXg3qOpi0KnUaFpBhWEfDv3ggSQIH.jpg',
                'description' => 'Kuchmachi is made with the heart, liver, kidneys, spleen and lungs of pigs, young beef or chickens. In this recipe we have used pig. Kuchmachi can be made with or without walnuts and is usually garnished with pomegranate seeds. This is a great example of Sakartvelian cuisine. Wash animal or chicken internals very well. Put the internals in a large saucepan, add water and boil. While boiling, remove the scum from the stock. When cooked, remove the internals from the saucepan and let them cool down. Cut cooked internals in small pieces. In a separate pan fry chopped onions in sunflower oil. When golden, add cut internals and continue to cook for about 15-20 minutes. Add crushed garlic, salt, pepper and spices. Serve with pomegranate seeds.',
                'is_active' => 1,
            ],
            [
                'name' => 'Gupta',
                'category_id' => 4,
                'image' => '/public/recipe_images/q0OQ3JacDnVojApBjvvRfS2HTEXlQX7NnDSaJEp2.jpg',
                'description' => 'Gupta is a dish of Sakartvelian cuisine. In fact, this meatball soup, but with a colorful and spicy spices. Variants of cooking this flavorful and hearty set. Want to offer your option. Help yourself! Cheat meat. Through a meat grinder skip the bell pepper, half of green onions. Wash rice and add to the mince. Add salt and all the spices. Add the raw egg. Carefully knead the meat. Put a pot of water on the stove. When the water boils, add salt and form of minced meat meatballs of medium size. Throws them in boiling water, gently stir. The remnants of greenery cut and add to soup, cook for another 5 minutes and turn off the soup. When applying in each plate pour 1 teaspoon of olive oil and garnish with greens as desired.',
                'is_active' => 1,
            ],
            [
                'name' => 'Pita',
                'category_id' => 5,
                'image' => '/public/recipe_images/URTqN10uXvdH3P0gOInrw94TkYPTJ8R35o5Ieaw8.jpg',
                'description' => 'Sakartvelian Bread, also called Lavash or Pita, is a delicious aromatic bread with a crisp crust and a soft chewy center. Traditionally it is cooked in a circular brick oven and the raw dough is slapped on the sides of it and allowed to bake. As I am assuming you do not have one of these special ovens in your home kitchen, this is a simple recipe for you to make it at home. In a bowl, mix all the dry ingredients together. Slowly add the water and combine well. Pour dough onto a counter top and start kneading it until it is doughy and tacky. Place back in the bowl and cover with a damp towel for about an hour. After an hour you can stretch the dough into a circle or oval and punch a hole in the middle. You can use your finger or a chopstick does not really matter. Place dough into a preheated oven at 220°C or 430°F for about 10 minutes. About 5 minutes in, I like to quickly open the oven and spritz the top of the bread with water to help create the crusty brown spots on top.',
                'is_active' => 1,
            ],
            [
                'name' => 'Shkmeruli',
                'category_id' => 9,
                'image' => '/public/recipe_images/AOrIT30lU3n78h2mUkTOW4zHO8uH3Kw9u2766Knj.jpg',
                'description' => 'This garlicky, creamy chicken dish originally hails from the village of Shkmeri in the Racha region of northwestern Sakartvelo but can be found on restaurant menus throughout the country. Requiring only a handful of ingredients, this delicious dish is refreshingly simple to make. Preheat oven to 200°C (400°F). Pat your chicken dry with paper towels and season liberally with salt and pepper on both sides. Heat one tablespoon of vegetable oil over medium heat in a large, oven-safe skillet until shimmering. Place the chicken breast-side down in the pan and sear chicken without touching until skin is deep brown and crispy, about 8-10 minutes. Flip chicken using tongs and cook the other side for about 5-10 more minutes. Remove chicken from pan, transfer to a plate, uncovered to ensure skin remains crispy. Set aside. In the same pan, reduce heat to medium-low and 20 grams of butter. Melt until foamy and add the garlic. Cook, stirring constantly, until very fragrant, about 30 seconds. Switching to a whisk, slowly drizzle in milk while whisking constantly. Once all of the milk is added continue whisking until it reaches a simmer. Return chicken to the skillet and move to the oven and finish cooking until done, or when an instant-read thermometer reads 74°C (165°F) when inserted into the thickest part of the breast, about 15-20 minutes. Remove from oven and take the chicken out the pan and allow to rest while finishing sauce. Return the skillet to medium-low heat and, whisking constantly, add butter one pat at a time, whisking until one pat is completely incorporated until adding another. Sauce should be glossy and homogenous. Simmer for about 5 minutes further until slightly thickened and reduced. In the meantime, transfer chicken to a cutting board and using a sharp knife, divide into 4-6 pieces. Transfer back into the skillet or into a serving dish and pour sauce over chicken. Serve immediately, preferably with a side of crusty bread.',
                'is_active' => 1,
            ],
            [
                'name' => 'Kubdari',
                'category_id' => 7,
                'image' => '/public/recipe_images/HPF59RaPe30gBNejJJL2MoB40uJua0Dq8Xn6LS1I.jpg',
                'description' => 'Kubdari is a delicious round meat pie from Sakartvelo Svaneti region. It is made with cut meat instead of minced, so while taking each bite you feel the tender juicy meat. Kubdari can be made either with pork, beef or their mix, depending on ones taste. Be careful while mixing spices. Take dried coriander in large amounts, moderate quantity of fenugreek, dill and cumin in relatively small amounts and mix. Meanwhile, pound meat (if the meat is not fresh and young enough, better use wooden mullet). Cut flattened meat in medium size cubes, add finely chopped onion, garlic and spices and mix up. Dissolve yeast in warm water (about 400-450 ml), add salt, flour and mix up well. Knead the dough. You can also add 50 grams of butter or some sunflower oil to the dough (optional). The dough should be tougher than in the case with Khachapuri (Sakartvelo cheese bread). When it is ready, cover dough with towel and keep in a warm place to rise. Divide dough into balls and roll them out. Put spiced meat on each flattened dough disc and tie the edges together. Roll out Kubdari first by hand, then by dough roller. Bake in the oven at 200 degrees for 20-25 minutes.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chvishtari',
                'category_id' => 7,
                'image' => '/public/recipe_images/bCM7k6deSqF9yIKlKc0cx9lNxffJP1rZ4He5rpSO.jpg',
                'description' => 'Chvishtari (also called chishdvaar) is a cornbread with cheese from Sakartvelo Svaneti region. It is also popular in Samegrelo region but made in a slightly different way. In this recipe we will show how to make the Megrelian version of Chvishtari. Place corn flour, cheeses and an egg in a large bowl . Combine well, add some water as needed and knead the dough for 10 minutes. Heat the skillet on a medium heat. Pour enough sunflower oil to cover the bottom of the skillet. Make equal size balls from the dough with your hands and flatten slightly to give an oval shape to each. Bake Chvishtari from the both sides, until golden brown. Serve hot.',
                'is_active' => 1,
            ],
            [
                'name' => 'Sakartvelian Salad',
                'category_id' => 1,
                'image' => '/public/images/Salad.jpg',
                'description' => 'This tomato and cucumber salad with a unique walnut dressing is a common accompaniment to Sakartvelian dishes all over the country. Delightfully fresh and easy to make, you are sure to love this salad! In a small bowl, combine the walnuts, garlic, vinegar and water. Stir to combine until a loose paste is formed, taste to adjust for salt and pepper. Set aside. Combine tomatoes, cucumber, onion and cilantro in a large bowl. Pour walnut dressing over and stir until thoroughly combined. Garnish with the chili and serve immediately.',
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
