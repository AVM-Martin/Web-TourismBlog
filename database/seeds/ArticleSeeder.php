<?php

use App\Article;
use App\Category;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->manualSeed();
        $this->randomFaker(30);
    }

    public function manualSeed() {
        $users = User::where('role', 'user')->pluck('id')->all();

        Article::insert([
            'title' => 'Raja Ampat Regency',
            'description' => 'Raja Ampat is a regency in West Papua and also become the one of wonderful destinations in Indonesia by the magnificent nature scenery and coral reef. The capital city is located in Waisai. This regency has 610 islands. Four of them, are Misool, Salawati, Batanta and Waigeo Island that become the major islands. Of the entire island, there is only 35 islands that are inhabited while others are uninhabited and mostly do not have any name yet. As an archipelago, the only inter-island transport and supporting community activities in Raja Ampat is the ocean freight. For instance if we want to reach Waisai, the district capital. When using the aircraft, it has to transit in Sorong. From Sorong to Waisai is reach by using sea transport. The facilities are available in speed boat with capacity of 10, 15 or 30 people. The cost is approximately Rp. 2 million. Waisai can be reached within 1.5 to 2 hours. Source: https://www.indonesia-tourism.com/blog/raja-ampat-regency/',
            'image' => 'public/ex-0.jpg',
            'user_id' => $users[array_rand($users)],
            'category_id' => Category::where('name', 'Archipelago')->first()->id,
        ]);

        Article::insert([
            'title' => 'Mount Kelud Today',
            'description' => 'Today, Mount kelud is very phenomenal with its new dome that exists from its lake. To reach Mount kelud, the visitors can use motorcycle and the direction come from Kediri to Wates continued to Margomulyo – Bambingan till Jurang Gelap or Mount Pedot. From Jurang Gelap till the new dome of Mount kelud is about 2 km and you can go on foot. Mount kelud has change, it had green crater before explode, but today the beautiful crater is gone and turn up new crater that different from the previous. The increase of Mount kelud activities from the beginning step to the next step is show phenomenal activities that never happen before. The water temperature in 1990 exploded is about 400 Celsius, and in this activity, the water temperature is increase till 77,50 Celsius, makes thermometer broken caused of high warming. The earthquake is also has increase level, both volcanic and tectonic earthquake. The earthquake is higher compare with exploded in 1990. The white and black smokes that come out from the crater is not happen in 1990. Source: https://www.indonesia-tourism.com/blog/mount-kelud-today/',
            'image' => 'public/ex-1.jpg',
            'user_id' => $users[array_rand($users)],
            'category_id' => Category::where('name', 'Mountain')->first()->id,
        ]);

        Article::insert([
            'title' => 'Karampuang Island Tourism in Mamuju',
            'description' => 'Karampuang Island is a beautiful island located in Karampuang Village, Mamuju District, Mamuju Regency, West Sulawesi Province. By boarding the ship as the only means of transportation to Karampuang Island from the port of Mamuju, visitors can already enjoy the beauty of island which is also known as the crocodile island by the local community because of its shape similar to the reptile when viewed from above. Even though ships are the only access to go to Karampuang Island, activities from Mamuju city to Karampuang Island have never been lonely. Only by taking about twenty minutes, visitors will immediately arrive at the island whose name means moon in Indonesian. Source: https://www.indonesia-tourism.com/blog/karampuang-island-tourism-in-mamuju/',
            'image' => 'public/ex-2.jpg',
            'user_id' => $users[array_rand($users)],
            'category_id' => Category::where('name', 'Beach')->first()->id,
        ]);

        Article::insert([
            'title' => 'Larat Island, The Island Of The Light',
            'description' => 'Larat Island is the outer island of Indonesia that located in the Aru Sea and it is bordered by the states of Australia. Larat Island is part of the government of ??West Southeast Maluku regency, Maluku province. Larat Island is one of 92 frontline island in Indonesia. On this island, there are points that determine sea borders between Indonesia and Australia. This small island is administratively a district of North Tanimbar mainland of West Southeast Maluku (MTB). To go to Larat island can only be reached by sea, both from the Capital MTB, Saumlaki, nor by public ships from Surabaya. If it starts from Saumlaki, there are two motor boats with a capacity of 20 and 50 passengers. It takes about 4-5 hours from Saumlaki-Larat, it depending on the weather of the sea. Source: https://www.indonesia-tourism.com/blog/larat-island-the-island-of-the-light/',
            'image' => 'public/ex-3.jpg',
            'user_id' => $users[array_rand($users)],
            'category_id' => Category::where('name', 'Archipelago')->first()->id,
        ]);

        Article::insert([
            'title' => 'Bungus Beach, Padang - West Sumatra',
            'description' => 'Bungus Beach is located in a quiet Bungus bay. The atmosphere around the beach is beautiful and it has natural scenery. The hills surround the beach is looks like a tower toward the sea. Bungus is kind of sloping beaches with white sand that is suitable for a variety of recreation such as swimming, diving, sunbathing or boating. It located 20 km south of Padang, West Sumatra, and it takes 1.5 hours drive; the beach is easily reached by land transportation. On the beach, there are available tourist facilities such as beach umbrellas and chairs for lazy sunbathing, food stalls, boat rentals and more. Source: https://www.indonesia-tourism.com/blog/2205/',
            'image' => 'public/ex-4.jpg',
            'user_id' => $users[array_rand($users)],
            'category_id' => Category::where('name', 'Beach')->first()->id,
        ]);

        Article::insert([
            'title' => 'Tanjung Lesung - Pandeglang, Banten',
            'description' => 'Banten is one area that has many beaches as tourism potential. We all know about Anyer, Carita, Sawarna, and Bayah. However, there is still one more beach tourism destinations in Banten, which way more beautiful; Tanjung Lesung. Tanjung Lesung is located in the village of Tanjung Jaya, Panimbang District, Pandeglang, Banten. This beach called Tanjung Lesung because the location is jutting into the sea so that its shape is very similar to the end of the dimples. As in Sundanese, the mortar is identical with the grooves or dimples on the cheeks, the shape is also in accordance with the indented coastline. Source: https://www.indonesia-tourism.com/blog/tanjung-lesung-pandeglang-banten/',
            'image' => 'public/ex-5.jpg',
            'user_id' => $users[array_rand($users)],
            'category_id' => Category::where('name', 'Beach')->first()->id,
        ]);

        Article::insert([
            'title' => 'Gunung Leuser National Park, Aceh - North Sumatra',
            'description' => 'Gunung Leuser National Park (TNGL) is one of Nature Conservation Areas in Indonesia that covering an area of 1,094,692 hectares. The administration is located in two provinces of Aceh and North Sumatra. This forest is dominant in East Aceh, South Aceh and Langkat North Sumatra; it known by the results of world-class coffee and tobacco. Those who love to travel can start the adventure in this national park through Bukit Lawang, North Sumatra, where there are the impresive of orangutan that live inside the forest. Gunung Leuser forest also has a wealth of tropical fruits such as mango, rambutan, durian, avocado, orange, papaya, and guava. Source: https://www.indonesia-tourism.com/blog/gunung-leuser-national-park-aceh-north-sumatra/',
            'image' => 'public/ex-6.jpg',
            'user_id' => $users[array_rand($users)],
            'category_id' => Category::where('name', 'Mountain')->first()->id,
        ]);

        Article::insert([
            'title' => 'Karimunjawa: The Hidden Treasure Is Here',
            'description' => 'Karimunjawa is an archipelago of 69 Islands and located in Java Sea, approximately 80 kilometres northwest of Jepara. By the natural beauty of coral reefs, seaweed, and sea grass in diverse marine biota, mangrove forests, mountains and the remaining lowland tropical forests, everything is under the natural resource that making Karimunjawa as a Sea National Park. Karimunjawa is so rich and fascinated by the exotic flora and fauna. This area has several kinds of flora ecosystems, like coral reefs, mangrove forests (sea grass), coastal forests, and lowland forest. On the other hand, the fauna also varied, such as deer and long-tailed monkeys and aquatic fauna that consists of 242 species of ornamental fish and 133 aquatic genera. In addition, at this location there is also a rare species fauna that live on Bird Island and Geleang island, like white chest sea eagle, and two species of turtle, the hawks bill and green turtles. Source: https://www.indonesia-tourism.com/blog/the-hidden-treasure-is-here/',
            'image' => 'public/ex-7.jpg',
            'user_id' => $users[array_rand($users)],
            'category_id' => Category::where('name', 'Beach')->first()->id,
        ]);

        Article::insert([
            'title' => 'Kemujan Island',
            'description' => 'Kemujan Island, also known as Kamodian, Kemujan, Poelau Kemoedjan, Pulau Kemudjanis, one of islands that located in Karimunjawa, Jepara. This island is administratively located in the district of Karimunjawa. The island has a marine dock facilities, Dewodaru airport and Diesel. This island has a population of 2936 people with different livelihoods. The island has a rainfall average of 3,000 mm per year with an average temperature of 30-31 º C. The economic potential of the island is in the form of marine fisheries, potential fishing, seaweed farming and marine tourism. Source: https://www.indonesia-tourism.com/blog/kemujan-island/',
            'image' => 'public/ex-8.jpg',
            'user_id' => $users[array_rand($users)],
            'category_id' => Category::where('name', 'Beach')->first()->id,
        ]);

        Article::insert([
            'title' => 'Badung, Where The Famous Are Settle',
            'description' => 'Badung, is one of regencies in Bali where Kuta and Nusa Dua, which is the most famous destination in Bali that has been known worldwide, is located in this regency. The capital of this regency is Mangunpura. This regency is bounded with Buleleng regency in north, Tabanan regency in west and bangli regency, Gianyar regency. Denpasar city in east. Looking at the topography, Badung regency looks very unique, the area is seems like the dagger of “Keris”, which is the traditional weapon of Bali. The community in Badung has customary rule which is called Awig-Awig. The existence of this awig awig rules is bind the citizens so that people are generally very obedient to the customs. Therefore, the existence of this Indigenous Institute is become a very powerful tool in attracting the participation of the community. Many programs have successfully implemented the Government announced in this area, because of existing traditional institutions. Source: https://www.indonesia-tourism.com/blog/badung-where-the-famous-are-settle/',
            'image' => 'public/ex-9.jpg',
            'user_id' => $users[array_rand($users)],
            'category_id' => Category::where('name', 'Beach')->first()->id,
        ]);
    }

    public function randomFaker($n) {
        $users = User::where('role', 'user')->pluck('id')->all();
        $categories = Category::all()->pluck('id')->all();

        for ($i = 1; $i <= $n; $i++) {
            factory(Article::class)->create([
                'user_id' => $users[array_rand($users)],
                'category_id' => $categories[array_rand($categories)],
            ]);
        }
    }
}
