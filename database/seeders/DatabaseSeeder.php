<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'password' =>  bcrypt('password')
        ]);

        User::factory(10)->create();

        //city seeding
        City::create([
            'name' => 'Bali',
            'slug' => 'bali',
        ]);
        City::create([
            'name' => 'Bogor',
            'slug' => 'bogor',
        ]);
        City::create([
            'name' => 'Bandung',
            'slug' => 'bandung',
        ]);

        City::create([
            'name' => 'Jogjakarta',
            'slug' => 'jogjakarta',
        ]);

        City::create([
            'name' => 'Jakarta',
            'slug' => 'jakarta',
        ]);

        City::create([
            'name' => 'Lombok',
            'slug' => 'lombok',
        ]);



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
            'title' => 'Balinese Scenery',
            'slug' => 'balinese-scenery',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum incidunt a amet voluptate ullam doloribus sint! Ducimus ratione assumenda aliquam hic necessitatibus vero delectus quo, a dignissimos modi',
            'category_id' => '1',
            'city_id' => '1',
            'user_id' => '3',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum incidunt a amet voluptate ullam doloribus sint! Ducimus ratione assumenda aliquam hic necessitatibus vero delectus quo, a dignissimos modi quia minus nostrum ut quaerat ipsam molestias tempora beatae neque quis id voluptas saepe quos ad. Beatae ipsa consectetur iure eum in vitae perspiciatis reprehenderit sunt enim, quod laborum qui iste, asperiores doloribus itaque quae sint laudantium fugit, molestias sequi commodi possimus ex quas.</p><p>Illum facilis maiores id, quisquam voluptates fugit totam, accusamus sunt ea, nam animi rerum tempore beatae sed assumenda inventore laborum quae ipsa? Vero neque mollitia repudiandae optio voluptatem. Sunt totam itaque quae culpa sequi, ducimus harum provident commodi non hic quas excepturi illo voluptatum tempore consectetur voluptas voluptatibus possimus optio. Eos quos velit quaerat rem! Doloremque, porro temporibus, suscipit deserunt blanditiis, quia architecto neque reiciendis accusamus cum praesentium sapiente id pariatur laudantium ducimus ab distinctio totam ipsum!</p>'
        ]);
        Post::create([
            'title' => 'Bandung Street',
            'slug' => 'bandung-street',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum incidunt a amet voluptate ullam doloribus sint! Ducimus ratione assumenda aliquam hic necessitatibus vero delectus quo, a dignissimos modi',
            'category_id' => '2',
            'city_id' => '3',
            'user_id' => '1',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum incidunt a amet voluptate ullam doloribus sint! Ducimus ratione assumenda aliquam hic necessitatibus vero delectus quo, a dignissimos modi quia minus nostrum ut quaerat ipsam molestias tempora beatae neque quis id voluptas saepe quos ad. Beatae ipsa consectetur iure eum in vitae perspiciatis reprehenderit sunt enim, quod laborum qui iste, asperiores doloribus itaque quae sint laudantium fugit, molestias sequi commodi possimus ex quas.</p><p>Illum facilis maiores id, quisquam voluptates fugit totam, accusamus sunt ea, nam animi rerum tempore beatae sed assumenda inventore laborum quae ipsa? Vero neque mollitia repudiandae optio voluptatem. Sunt totam itaque quae culpa sequi, ducimus harum provident commodi non hic quas excepturi illo voluptatum tempore consectetur voluptas voluptatibus possimus optio. Eos quos velit quaerat rem! Doloremque, porro temporibus, suscipit deserunt blanditiis, quia architecto neque reiciendis accusamus cum praesentium sapiente id pariatur laudantium ducimus ab distinctio totam ipsum!</p>'
        ]);
        Post::create([
            'title' => 'Balinese Beaches',
            'slug' => 'balinese-beaches',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum incidunt a amet voluptate ullam doloribus sint! Ducimus ratione assumenda aliquam hic necessitatibus vero delectus quo, a dignissimos modi',
            'category_id' => '3',
            'city_id' => '1',
            'user_id' => '2',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum incidunt a amet voluptate ullam doloribus sint! Ducimus ratione assumenda aliquam hic necessitatibus vero delectus quo, a dignissimos modi quia minus nostrum ut quaerat ipsam molestias tempora beatae neque quis id voluptas saepe quos ad. Beatae ipsa consectetur iure eum in vitae perspiciatis reprehenderit sunt enim, quod laborum qui iste, asperiores doloribus itaque quae sint laudantium fugit, molestias sequi commodi possimus ex quas.</p><p>Illum facilis maiores id, quisquam voluptates fugit totam, accusamus sunt ea, nam animi rerum tempore beatae sed assumenda inventore laborum quae ipsa? Vero neque mollitia repudiandae optio voluptatem. Sunt totam itaque quae culpa sequi, ducimus harum provident commodi non hic quas excepturi illo voluptatum tempore consectetur voluptas voluptatibus possimus optio. Eos quos velit quaerat rem! Doloremque, porro temporibus, suscipit deserunt blanditiis, quia architecto neque reiciendis accusamus cum praesentium sapiente id pariatur laudantium ducimus ab distinctio totam ipsum!</p>'
        ]);
        Post::create([
            'title' => 'Jogjakarta Scenery',
            'slug' => 'jogjakarta-scenery',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum incidunt a amet voluptate ullam doloribus sint! Ducimus ratione assumenda aliquam hic necessitatibus vero delectus quo, a dignissimos modi',
            'category_id' => '4',
            'city_id' => '4',
            'user_id' => '10',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum incidunt a amet voluptate ullam doloribus sint! Ducimus ratione assumenda aliquam hic necessitatibus vero delectus quo, a dignissimos modi quia minus nostrum ut quaerat ipsam molestias tempora beatae neque quis id voluptas saepe quos ad. Beatae ipsa consectetur iure eum in vitae perspiciatis reprehenderit sunt enim, quod laborum qui iste, asperiores doloribus itaque quae sint laudantium fugit, molestias sequi commodi possimus ex quas.</p><p>Illum facilis maiores id, quisquam voluptates fugit totam, accusamus sunt ea, nam animi rerum tempore beatae sed assumenda inventore laborum quae ipsa? Vero neque mollitia repudiandae optio voluptatem. Sunt totam itaque quae culpa sequi, ducimus harum provident commodi non hic quas excepturi illo voluptatum tempore consectetur voluptas voluptatibus possimus optio. Eos quos velit quaerat rem! Doloremque, porro temporibus, suscipit deserunt blanditiis, quia architecto neque reiciendis accusamus cum praesentium sapiente id pariatur laudantium ducimus ab distinctio totam ipsum!</p>'
        ]);
        Post::create([
            'title' => 'Jogjakarta Cliffs',
            'slug' => 'jogjakarta-cliffs',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum incidunt a amet voluptate ullam doloribus sint! Ducimus ratione assumenda aliquam hic necessitatibus vero delectus quo, a dignissimos modi',
            'category_id' => '5',
            'city_id' => '4',
            'user_id' => '9',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum incidunt a amet voluptate ullam doloribus sint! Ducimus ratione assumenda aliquam hic necessitatibus vero delectus quo, a dignissimos modi quia minus nostrum ut quaerat ipsam molestias tempora beatae neque quis id voluptas saepe quos ad. Beatae ipsa consectetur iure eum in vitae perspiciatis reprehenderit sunt enim, quod laborum qui iste, asperiores doloribus itaque quae sint laudantium fugit, molestias sequi commodi possimus ex quas.</p><p>Illum facilis maiores id, quisquam voluptates fugit totam, accusamus sunt ea, nam animi rerum tempore beatae sed assumenda inventore laborum quae ipsa? Vero neque mollitia repudiandae optio voluptatem. Sunt totam itaque quae culpa sequi, ducimus harum provident commodi non hic quas excepturi illo voluptatum tempore consectetur voluptas voluptatibus possimus optio. Eos quos velit quaerat rem! Doloremque, porro temporibus, suscipit deserunt blanditiis, quia architecto neque reiciendis accusamus cum praesentium sapiente id pariatur laudantium ducimus ab distinctio totam ipsum!</p>'
        ]);
        Post::create([
            'title' => 'Lombok Scenery',
            'slug' => 'lombok-scenery',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum incidunt a amet voluptate ullam doloribus sint! Ducimus ratione assumenda aliquam hic necessitatibus vero delectus quo, a dignissimos modi',
            'category_id' => '2',
            'city_id' => '6',
            'user_id' => '7',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptatum incidunt a amet voluptate ullam doloribus sint! Ducimus ratione assumenda aliquam hic necessitatibus vero delectus quo, a dignissimos modi quia minus nostrum ut quaerat ipsam molestias tempora beatae neque quis id voluptas saepe quos ad. Beatae ipsa consectetur iure eum in vitae perspiciatis reprehenderit sunt enim, quod laborum qui iste, asperiores doloribus itaque quae sint laudantium fugit, molestias sequi commodi possimus ex quas.</p><p>Illum facilis maiores id, quisquam voluptates fugit totam, accusamus sunt ea, nam animi rerum tempore beatae sed assumenda inventore laborum quae ipsa? Vero neque mollitia repudiandae optio voluptatem. Sunt totam itaque quae culpa sequi, ducimus harum provident commodi non hic quas excepturi illo voluptatum tempore consectetur voluptas voluptatibus possimus optio. Eos quos velit quaerat rem! Doloremque, porro temporibus, suscipit deserunt blanditiis, quia architecto neque reiciendis accusamus cum praesentium sapiente id pariatur laudantium ducimus ab distinctio totam ipsum!</p>'
        ]);
    }
}
