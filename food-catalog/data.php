<?php
$foods = [
    1 => [
        'id' => 1,
        'name' => 'Chicken Adobo',
        'desc' => 'The classic Filipino savory stew.',
        'recipe' => 'Soy sauce, Vinegar, Garlic, Peppercorns, Bay leaves.',
        'instructions' => 'Marinate chicken. Brown the meat. Simmer in the marinade until tender.',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c9/Adobo_DSCF4391.jpg'
    ],
    2 => [
        'id' => 2,
        'name' => 'Sinigang na Baboy',
        'desc' => 'A sour and savory soup made with pork and tamarind.',
        'recipe' => 'Pork belly, Tamarind base, Kangkong, Radish, Tomato.',
        'instructions' => 'Boil pork until tender. Add tamarind mix. Add vegetables last.',
        'image' => 'https://asianinspirations.com.au/wp-content/uploads/2022/07/R02988-Pork-Sinigang.jpg'
    ],
    3 => [
        'id' => 3,
        'name' => 'Halo-Halo',
        'desc' => 'The ultimate Filipino iced dessert.',
        'recipe' => 'Shaved ice, Evaporated milk, Ube, Leche Flan, Beans.',
        'instructions' => 'Layer ingredients in a tall glass. Top with ice, milk, and ube.',
        'image' => 'https://graceland.ph/wp-content/uploads/2023/05/HALO-HALO-SPECIAL.jpg'
    ],
    4 => [
        'id' => 4,
        'name' => 'Sisig',
        'desc' => 'Sizzling chopped pork face and ears.',
        'recipe' => 'Pork mask, Onion, Chili, Calamansi, Mayo (optional).',
        'instructions' => 'Boil then grill the pork. Chop finely. Sauté with onions and chili.',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Authentic_Kapampangan_Sisig.jpg/2560px-Authentic_Kapampangan_Sisig.jpg'
    ],
    5 => [
        'id' => 5,
        'name' => 'Kare-Kare',
        'desc' => 'Oxtail stew in peanut sauce.',
        'recipe' => 'Oxtail, Peanut butter, Annatto, String beans, Eggplant.',
        'instructions' => 'Tenderize meat. Sauté aromatics and add peanut paste. Serve with bagoong.',
        'image' => 'https://browngirlveganeats.com/wp-content/uploads/2023/10/photo1696939990-1.jpeg'
    ],
    6 => [
        'id' => 6,
        'name' => 'Pancit',
        'desc' => 'Stir-fried egg noodles with vegetables and meat.',
        'recipe' => 'Canton noodles, Soy sauce, Mixed vegetables, Chicken, Shrimp.',
        'instructions' => 'Sauté meat and vegetables. Add noodles and sauce. Stir-fry until cooked.',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Pancit_Ilonggo_Style_-_12110747826.jpg/2560px-Pancit_Ilonggo_Style_-_12110747826.jpg'
    ],
    7 => [
        'id' => 7,
        'name' => 'Lechon Kawali',
        'desc' => 'Crispy deep-fried pork belly.',
        'recipe' => 'Pork belly, Salt, Pepper, Bay leaves, Oil for frying.',
        'instructions' => 'Boil pork with spices until tender. Deep fry until crispy.',
        'image' => 'https://www.seriouseats.com/thmb/tCtlpSDJ3QYZfYrWKT6xy43RVJ4=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/20210508-lechon-kawali-melissa-hom-2-inchChunks-seriouseats-1d53c12cee234305b921362e2106bf29.jpg'
    ],
    8 => [
        'id' => 8,
        'name' => 'Bibingka',
        'desc' => 'Traditional Filipino rice cake.',
        'recipe' => 'Rice flour, Coconut milk, Sugar, Eggs, Grated coconut.',
        'instructions' => 'Mix ingredients. Pour into banana leaf-lined molds. Bake until set.',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Bibingka-6.jpg/960px-Bibingka-6.jpg'
    ],
    9 => [
        'id' => 9,
        'name' => 'Lumpiang Shanghai',
        'desc' => 'Filipino-style spring rolls with ground pork filling.',
        'recipe' => 'Ground pork, Carrot, Onion, Garlic, Spring roll wrappers.',
        'instructions' => 'Mix filling ingredients. Wrap in spring roll wrappers. Deep fry until golden.',
        'image' => 'https://themayakitchen.com/wp-content/uploads/2019/10/LUMPIANG-SHANGHAI.jpg'
    ],
    10 => [
        'id' => 10,
        'name' => 'Bicol Express',
        'desc' => 'Spicy pork stew in coconut milk.',
        'recipe' => 'Pork, Coconut milk, Chili peppers, Shrimp paste,   Garlic.',
        'instructions' => 'Sauté pork and garlic. Add coconut milk and chilies. Simmer until cooked.',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e8/Bicol_Express.jpg'
    ],
    11 => [
        'id' => 11,
        'name' => 'Turon',
        'desc' => 'Fried banana spring rolls with caramelized sugar.',
        'recipe' => 'Saba bananas, Brown sugar, Spring roll wrappers, Oil for frying.',
        'instructions' => 'Wrap banana slices with brown sugar in spring roll wrappers. Fry until golden.',
        'image' => 'https://themayakitchen.com/wp-content/uploads/2019/10/TURON.jpg'
    ],
    12 => [
        'id' => 12,
        'name' => 'Puto',
        'desc' => 'Steamed rice cakes, often served as a side dish.',
        'recipe' => 'Rice flour, Sugar, Baking powder, Coconut milk, Cheese (optional).',
        'instructions' => 'Mix ingredients. Pour into molds. Steam until cooked.',
        'image' => 'https://flouredframe.com/wp-content/uploads/2019/12/filipino-puto-15.jpg'
    ],
    13 => [
        'id' => 13,
        'name' => 'Patatim',
        'desc' => 'a Filipino-Chinese braised pork hock dish slow-cooked until very tender in a savory-sweet sauce made with soy sauce, sugar, and star anise',
        'recipe' => 'Pork, Soy sauce, Star anise, laurel, pepper, garlic, onions, brown sugar',
        'instructions' => 'Marinate pork. Sear until brown. Simmer with spices and sauce until tender.',
        'image' => 'https://delivery.vikings.ph/cdn/shop/products/PataTimWhole_0b8887e1-e0c5-43da-9a11-7bba479c982a_800x.jpg?v=1600093113'
    ],
    14 => [
        'id' => 14,
        'name' => 'Empanada',
        'desc' => 'A stuffed bread or pastry baked or fried in many countries of the world.',
        'recipe' => 'Flour, Ground meat, Potatoes, Carrots, Onions, Spices.',
        'instructions' => 'Prepare dough. Cook filling. Assemble and bake or fry until golden brown.',
        'image' => 'https://cdn-ilddihb.nitrocdn.com/MgqZCGPEMHvMRLsisMUCAIMWvgGMxqaj/assets/images/optimized/rev-e5c3642/www.goya.com/wp-content/uploads/2023/10/empanadas-beef-turnovers.jpg'
    ],
    15 => [
        'id' => 15,
        'name' => 'Callos',
        'desc' => 'A Spanish-influenced Filipino stew made with tripe, chickpeas, and chorizo.',
        'recipe' => 'Beef tripe, Chickpeas, Chorizo, Tomato sauce, Bell peppers.',
        'instructions' => 'Boil tripe until tender. Sauté chorizo and vegetables. Simmer with tripe and sauce.',    
        'image' => 'https://www.simpol.ph/wp-content/uploads/2025/06/CALLOS.jpg',
    ],
    16 => [
        'id' => 16,
        'name' => 'Arroz Caldo',
        'desc' => 'A comforting Filipino rice porridge flavored with ginger and garlic.',
        'recipe' => 'Rice, Chicken, Ginger, Garlic, Fish sauce, Green onions.',
        'instructions' => 'Sauté garlic and ginger. Add chicken and rice. Simmer until rice is soft. Garnish with green onions.',
        'image' => 'https://www.eatwithcarmen.com/wp-content/uploads/2024/09/Arroz-Caldo-with-Chicken.jpg',
    ],
    17 => [
        'id' => 17,
        'name' => 'Laing',
        'desc' => 'A spicy dish made from dried taro leaves cooked in coconut milk.',
        'recipe' => 'Dried taro leaves, Coconut milk, Chili peppers, Garlic, Shrimp paste.',
        'instructions' => 'Sauté garlic and chili. Add coconut milk and dried taro leaves. Simmer until cooked.',
        'image' => 'https://www.kawalingpinoy.com/wp-content/uploads/2019/05/laing-9.jpg'
    ],
    18 => [
        'id' => 18,
        'name' => 'Pancit Malabon',
        'desc' => 'A Filipino noodle dish known for its thick rice noodles and seafood toppings.',
        'recipe' => 'Thick rice noodles, Shrimp, Squid, Fish sauce, Annatto oil, Vegetables.',
        'instructions' => 'Cook noodles. Sauté seafood and vegetables. Mix with noodles and sauce. Top with more seafood.',
        'image' => 'https://www.todaysdelight.com/wp-content/uploads/2018/05/pancit-malabon-recipe-1724-500x500.jpg'
    ],
    19 => [
        'id' => 19,
        'name' => 'Dinuguan',
        'desc' => 'A savory Filipino stew made from pork and pig\'s blood.',
        'recipe' => 'Pork, Pig\'s blood, Vinegar, Garlic, Chili peppers.',
        'instructions' => 'Sauté garlic and pork. Add pig\'s blood and vinegar. Simmer until cooked.',
        'image' => 'https://assets.unileversolutions.com/recipes-v2/110821.jpg'
    ],
    20 => [
        'id' => 20,
        'name' => 'Mechado',
        'desc' => 'A Filipino beef stew braised in a tomato-based sauce.',
        'recipe' => 'Beef, Tomato sauce, Soy sauce, Potatoes, Carrots.',
        'instructions' => 'Sear beef. Sauté vegetables. Simmer beef in tomato sauce until tender.',
        'image' => 'https://www.unileverfoodsolutions.com.ph/dam/global-ufs/mcos/SEA/calcmenu/recipes/PH-recipes/chicken-&-other-poultry-dishes/mechado-baka/mechado-baka-main-banner.jpg'
    ],

];
?>