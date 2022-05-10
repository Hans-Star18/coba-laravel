<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::create([
            'name' => 'Agus Suardiasa',
            'username' => 'agussuardiasa',
            'email' => 'agussuardiasa1231@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        // User::create([
        //     'name' => 'Hans Star',
        //     'email' => 'hansstar18@gmail.com',
        //     'password' => bcrypt('Tokopedia1+1=2'),
        // ]);

        // \App\Models\User::factory(10)->create();
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(100)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui alias natus deleniti nemo dolorem delectus tenetur non sed, nihil ullam quae in aperiam autem atque! Veniam quibusdam quod earum ab.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui alias natus deleniti nemo dolorem delectus tenetur non sed, nihil ullam quae in aperiam autem atque! Veniam quibusdam quod earum ab. Itaque numquam temporibus reiciendis officia ipsam ea, corporis, quas tenetur praesentium nihil voluptatem consequuntur quod sit ipsa mollitia aliquid veritatis tempore nemo, eligendi repellat! Dolores suscipit sunt ea perspiciatis laborum, libero magni eveniet quaerat officiis culpa numquam esse laboriosam deleniti assumenda non iure impedit officia autem voluptatibus, id exercitationem dolorum. Voluptatem quae corrupti beatae! Aut, modi? Quisquam, adipisci ab inventore, ex commodi, quasi assumenda eaque iste laudantium quo nam expedita.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui alias natus deleniti nemo dolorem delectus tenetur non sed, nihil ullam quae in aperiam autem atque! Veniam quibusdam quod earum ab.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui alias natus deleniti nemo dolorem delectus tenetur non sed, nihil ullam quae in aperiam autem atque! Veniam quibusdam quod earum ab. Itaque numquam temporibus reiciendis officia ipsam ea, corporis, quas tenetur praesentium nihil voluptatem consequuntur quod sit ipsa mollitia aliquid veritatis tempore nemo, eligendi repellat! Dolores suscipit sunt ea perspiciatis laborum, libero magni eveniet quaerat officiis culpa numquam esse laboriosam deleniti assumenda non iure impedit officia autem voluptatibus, id exercitationem dolorum. Voluptatem quae corrupti beatae! Aut, modi? Quisquam, adipisci ab inventore, ex commodi, quasi assumenda eaque iste laudantium quo nam expedita.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui alias natus deleniti nemo dolorem delectus tenetur non sed, nihil ullam quae in aperiam autem atque! Veniam quibusdam quod earum ab.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui alias natus deleniti nemo dolorem delectus tenetur non sed, nihil ullam quae in aperiam autem atque! Veniam quibusdam quod earum ab. Itaque numquam temporibus reiciendis officia ipsam ea, corporis, quas tenetur praesentium nihil voluptatem consequuntur quod sit ipsa mollitia aliquid veritatis tempore nemo, eligendi repellat! Dolores suscipit sunt ea perspiciatis laborum, libero magni eveniet quaerat officiis culpa numquam esse laboriosam deleniti assumenda non iure impedit officia autem voluptatibus, id exercitationem dolorum. Voluptatem quae corrupti beatae! Aut, modi? Quisquam, adipisci ab inventore, ex commodi, quasi assumenda eaque iste laudantium quo nam expedita.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui alias natus deleniti nemo dolorem delectus tenetur non sed, nihil ullam quae in aperiam autem atque! Veniam quibusdam quod earum ab.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui alias natus deleniti nemo dolorem delectus tenetur non sed, nihil ullam quae in aperiam autem atque! Veniam quibusdam quod earum ab. Itaque numquam temporibus reiciendis officia ipsam ea, corporis, quas tenetur praesentium nihil voluptatem consequuntur quod sit ipsa mollitia aliquid veritatis tempore nemo, eligendi repellat! Dolores suscipit sunt ea perspiciatis laborum, libero magni eveniet quaerat officiis culpa numquam esse laboriosam deleniti assumenda non iure impedit officia autem voluptatibus, id exercitationem dolorum. Voluptatem quae corrupti beatae! Aut, modi? Quisquam, adipisci ab inventore, ex commodi, quasi assumenda eaque iste laudantium quo nam expedita.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}