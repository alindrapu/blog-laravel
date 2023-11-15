<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //user seeding

        User::create([
            'name' => 'Alindra Putra',
            'username' => 'alindrapn',
            'email' => 'alindrapu@gmail.com',
            'password' =>  bcrypt('password'),
            'address' => 'Ds. Abdullah No. 616, Banjar 87112, Babel',
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
            'phone' => '+62812812812'
        ]);

        User::factory(10)->create();

        //city seeding
        $cityData = [
            ['name' => 'Bali', 'slug' => 'bali'],
            ['name' => 'Bogor', 'slug' => 'bogor'],
            ['name' => 'Bandung', 'slug' => 'bandung'],
            ['name' => 'Jogjakarta', 'slug' => 'jogjakarta'],
            ['name' => 'Jakarta', 'slug' => 'jakarta'],
            ['name' => 'Lombok', 'slug' => 'lombok'],
            ['name' => 'Surabaya', 'slug' => 'surabaya'],
            ['name' => 'Medan', 'slug' => 'medan'],
            ['name' => 'Semarang', 'slug' => 'semarang'],
            ['name' => 'Makassar', 'slug' => 'makassar'],
            ['name' => 'Palembang', 'slug' => 'palembang'],
            ['name' => 'Balikpapan', 'slug' => 'balikpapan'],
            ['name' => 'Padang', 'slug' => 'padang'],
            ['name' => 'Manado', 'slug' => 'manado'],
            ['name' => 'Denpasar', 'slug' => 'denpasar'],
            ['name' => 'Malang', 'slug' => 'malang'],
            ['name' => 'Tangerang', 'slug' => 'tangerang'],
            ['name' => 'Cirebon', 'slug' => 'cirebon'],
            ['name' => 'Pekanbaru', 'slug' => 'pekanbaru'],
        ];

        foreach ($cityData as $data) {
            City::create($data);
        }

        //category seeding
        Category::create([
            'name' => 'Sceneries Journeys',
            'slug' => 'scenery-journeys',
            'city_id' => '1'
        ]);
        Category::create([
            'name' => 'Streets Journeys',
            'slug' => 'street-journeys',
            'city_id' => '2'
        ]);
        Category::create([
            'name' => 'Beaches Journeys',
            'slug' => 'beaches-journeys',
            'city_id' => '3'
        ]);
        Category::create([
            'name' => 'Rivers Journeys',
            'slug' => 'rivers-journeys',
            'city_id' => '4'
        ]);
        Category::create([
            'name' => 'Cliffs Journeys',
            'slug' => 'cliffs-journeys',
            'city_id' => '5'
        ]);
        Category::create([
            'name' => 'Forests Journeys',
            'slug' => 'forests-journeys',
            'city_id' => '6'
        ]);


        //post seeding
        Post::create([
            'title' => 'Discovering the Beauty of Balinese Scenery',
            'slug' => 'discovering-balinese-scenery',
            'excerpt' => 'Embark on a visual journey to explore the breathtaking scenery of Bali. Immerse yourself in the natural wonders, cultural richness, and serene landscapes that define the heart of this Indonesian paradise.',
            'category_id' => 1,
            'city_id' => 1,
            'user_id' => 3,
            'body' => '<p>Embark on a visual odyssey to uncover the hidden treasures of Balinese scenery, where the lush landscapes, tranquil beaches, and vibrant culture create an enchanting tapestry.</p>
            <p>As the sun sets over the picturesque landscapes, Bali reveals its breathtaking beauty. From the iconic rice terraces of Tegallalang to the sacred temples nestled in the heart of the island, each vista is a testament to the harmony between nature and culture.</p>
            <p>Immerse yourself in the spiritual energy that emanates from Bali\'s temples. Explore the intricate carvings, witness traditional ceremonies, and feel the sacred atmosphere that permeates these ancient grounds.</p>
            <p>Stroll along the pristine beaches, where the turquoise waters gently kiss the golden sands. Bali\'s beaches offer a serene escape, whether you seek relaxation or thrilling water activities.</p>
            <p>Indulge in the rich Balinese culture as you encounter traditional dance performances, savor local delicacies, and connect with the warm-hearted locals who embody the island\'s spirit.</p>
            <p>This post invites you to discover the beauty of Balinese scenery through a virtual journey. Let the captivating landscapes and cultural richness inspire your wanderlust, beckoning you to experience the magic of Bali in person.</p>'
        ]);

        Post::create([
            'title' => 'Exploring the Streets of Bandung',
            'slug' => 'exploring-bandung-streets',
            'excerpt' => 'Embark on a journey to uncover the vibrant streets of Bandung. Immerse yourself in the local culture, diverse architecture, and the bustling energy that defines this Indonesian city.',
            'category_id' => 2,
            'city_id' => 3,
            'user_id' => 1,
            'body' => '<p>Embark on a vibrant journey through the bustling streets of Bandung, where each corner tells a story of the city\'s rich history, diverse culture, and modern charm.</p>
            <p>Wander through the vibrant markets that line the streets, offering a kaleidoscope of colors and flavors. From traditional crafts to the latest fashion trends, Bandung\'s streets are a shopping haven for locals and visitors alike.</p>
            <p>Explore the unique architectural wonders that grace the cityscape. From colonial-era buildings to modern structures, each edifice adds to the eclectic charm that defines Bandung.</p>
            <p>Immerse yourself in the local culture as you traverse the streets. Indulge in street food delicacies, witness impromptu performances, and connect with the friendly locals who make Bandung a welcoming destination.</p>
            <p>For those seeking artistic inspiration, Bandung\'s streets are adorned with vibrant street art and murals, showcasing the city\'s creative spirit. Every turn is an opportunity to discover something new and unexpected.</p>
            <p>This post invites you to explore the dynamic streets of Bandung through a virtual journey. Let the diverse culture, architecture, and energy inspire your wanderlust, enticing you to experience the charm of Bandung firsthand.</p>'
        ]);

        Post::create([
            'title' => 'Exploring Balinese Beaches',
            'slug' => 'exploring-balinese-beaches',
            'excerpt' => 'Embark on a journey to discover the beauty of Balinese beaches. Immerse yourself in the serene landscapes and vibrant culture that make Bali a unique destination.',
            'category_id' => 3,
            'city_id' => 1,
            'user_id' => 2,
            'body' => '<p>Embark on a mesmerizing journey to explore the pristine beaches of Bali, where the turquoise waters and golden sands create a picturesque paradise.</p>
            <p>As the gentle waves kiss the shoreline, discover the allure of Balinese beaches. From the iconic Kuta Beach to the hidden gems of Nusa Dua, each location offers a unique blend of tranquility and adventure.</p>
            <p>Immerse yourself in the vibrant Balinese culture that surrounds these coastal havens. Witness traditional dance performances, indulge in delicious local cuisine, and connect with the warm-hearted locals who welcome visitors with open arms.</p>
            <p>For the adventurous souls, Bali\'s beaches provide a playground for water sports and exploration. Try your hand at surfing, snorkeling in coral reefs, or simply relax under the swaying palm trees with the sound of the ocean as your soundtrack.</p>
            <p>This post invites you to explore the enchanting Balinese beaches through a virtual journey. Let the beauty of the landscapes and the rich cultural tapestry inspire your wanderlust, encouraging you to plan your own adventure to this tropical paradise.</p>'
        ]);

        Post::create([
            'title' => 'Immersing in the Beauty of Jogjakarta Scenery',
            'slug' => 'immersing-jogjakarta-scenery',
            'excerpt' => 'Embark on a visual journey through the enchanting landscapes of Jogjakarta. Let the captivating scenery and rich cultural tapestry leave an indelible mark on your soul.',
            'category_id' => 4,
            'city_id' => 4,
            'user_id' => 10,
            'body' => '<p>Embark on a visual odyssey through the breathtaking scenery that defines Jogjakarta, where nature\'s beauty intertwines seamlessly with the rich cultural heritage of this extraordinary city.</p>
            <p>As the sun bathes the landscapes in warm hues, Jogjakarta reveals its picturesque vistas. From lush green fields to ancient temples, each frame is a testament to the harmony between man and nature.</p>
            <p>The iconic Prambanan Temple stands tall, a masterpiece of ancient architecture surrounded by serene gardens. Explore the intricacies of its carvings and feel the spiritual energy that resonates through its sacred grounds.</p>
            <p>Stroll through the bustling streets of Jogjakarta, where vibrant markets showcase the city\'s diverse offerings. Taste local delicacies, engage with artisans, and witness the vibrant tapestry of daily life that unfolds in every corner.</p>
            <p>The Sultan\'s Palace, with its regal architecture and historical significance, provides a glimpse into Jogjakarta\'s royal past. Traverse the palace grounds, adorned with elegant courtyards and centuries-old traditions.</p>
            <p>This post invites you to immerse yourself in the mesmerizing beauty of Jogjakarta\'s scenery. Let the captivating landscapes and cultural richness inspire a sense of wanderlust, beckoning you to explore the wonders that await in this remarkable city.</p>'
        ]);

        Post::create([
            'title' => 'Discovering the Beauty of Jogjakarta Cliffs',
            'slug' => 'discovering-jogjakarta-cliffs',
            'excerpt' => 'Embark on a journey to explore the breathtaking cliffs of Jogjakarta. Immerse yourself in the natural wonders and cultural richness of this enchanting destination.',
            'category_id' => 5,
            'city_id' => 4,
            'user_id' => 9,
            'body' => '<p>Embark on a mesmerizing journey to explore the hidden gems of Jogjakarta, where nature\'s wonders and cultural richness converge at the majestic cliffs.</p>
            <p>The cliffs of Jogjakarta offer a panoramic spectacle, providing awe-inspiring views of the surrounding landscapes. As the sun sets, the cliffs come alive with vibrant colors, creating a magical atmosphere that captivates visitors.</p>
            <p>Immerse yourself in the rich history and cultural significance of the cliffs. Discover ancient stories and traditions passed down through generations, adding a profound layer to the scenic beauty that surrounds you.</p>
            <p>For the adventurous souls, hiking trails unveil themselves, leading to viewpoints that offer unparalleled vistas of the cliffs and beyond. Capture the essence of Jogjakarta from these elevated perspectives, where every step is a moment of discovery.</p>
            <p>The local community, with their warm hospitality, adds to the charm of Jogjakarta. Engage with the residents, learn about their customs, and partake in the cultural festivities that make this destination truly special.</p>
            <p>This post invites you to join us on a virtual exploration of Jogjakarta Cliffs. Let the immersive landscapes and cultural narratives inspire your wanderlust, encouraging you to plan your own adventure to this extraordinary destination.</p>'
        ]);

        Post::create([
            'title' => 'Exploring the Beauty of Lombok',
            'slug' => 'exploring-lombok-beauty',
            'excerpt' => 'Discover the mesmerizing landscapes and rich culture of Lombok. Join us on a journey through this enchanting island.',
            'category_id' => 2,
            'city_id' => 6,
            'user_id' => 7,
            'body' => '<p>Lombok, with its pristine beaches and vibrant culture, offers a unique experience for travelers. From the breathtaking views of Mount Rinjani to the traditional Sasak villages, there is so much to explore.</p><p>Immerse yourself in the local traditions, savor the delicious cuisine, and unwind on the serene beaches. Whether you are an adventure seeker or a culture enthusiast, Lombok has something to offer for everyone.</p><p>This post invites you to join us on a virtual journey through the beauty of Lombok. Let the enchanting landscapes and warm hospitality of the locals inspire your next travel adventure.</p>'
        ]);
    }
}
