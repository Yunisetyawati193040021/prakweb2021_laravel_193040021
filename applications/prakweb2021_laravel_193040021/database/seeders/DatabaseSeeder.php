<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Yuni Setyawati',
        //     'email' => 'yuni@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Yanida Nur Nabila',
        //     'email' => 'yanida@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum consectetur dolore laboriosam minima molestiae vitae perspiciatis, consequatur quo, veniam illo ullam mollitia accusantium ipsum modi tenetur reprehenderit explicabo alias.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum consectetur dolore laboriosam minima molestiae vitae perspiciatis, consequatur quo, veniam illo ullam mollitia accusantium ipsum modi tenetur reprehenderit explicabo alias. Sunt quos molestias voluptatem voluptatibus, enim deserunt perferendis, tempora commodi qui quod delectus. Pariatur officiis nihil quasi ratione sint molestiae quibusdam quia repellat recusandae ipsum aperiam porro rem repellendus veritatis ad officia asperiores fuga, corporis eum temporibus, saepe dolorem eaque ipsam! Libero eos, exercitationem nam unde officia voluptatibus autem expedita distinctio. Magnam eos voluptas earum, deserunt consequatur alias veniam esse. Asperiores vel laudantium error ducimus mollitia, dolorem tenetur porro aliquid eius!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum consectetur dolore laboriosam minima molestiae vitae perspiciatis, consequatur quo, veniam illo ullam mollitia accusantium ipsum modi tenetur reprehenderit explicabo alias.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum consectetur dolore laboriosam minima molestiae vitae perspiciatis, consequatur quo, veniam illo ullam mollitia accusantium ipsum modi tenetur reprehenderit explicabo alias. Sunt quos molestias voluptatem voluptatibus, enim deserunt perferendis, tempora commodi qui quod delectus. Pariatur officiis nihil quasi ratione sint molestiae quibusdam quia repellat recusandae ipsum aperiam porro rem repellendus veritatis ad officia asperiores fuga, corporis eum temporibus, saepe dolorem eaque ipsam! Libero eos, exercitationem nam unde officia voluptatibus autem expedita distinctio. Magnam eos voluptas earum, deserunt consequatur alias veniam esse. Asperiores vel laudantium error ducimus mollitia, dolorem tenetur porro aliquid eius!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum consectetur dolore laboriosam minima molestiae vitae perspiciatis, consequatur quo, veniam illo ullam mollitia accusantium ipsum modi tenetur reprehenderit explicabo alias.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum consectetur dolore laboriosam minima molestiae vitae perspiciatis, consequatur quo, veniam illo ullam mollitia accusantium ipsum modi tenetur reprehenderit explicabo alias. Sunt quos molestias voluptatem voluptatibus, enim deserunt perferendis, tempora commodi qui quod delectus. Pariatur officiis nihil quasi ratione sint molestiae quibusdam quia repellat recusandae ipsum aperiam porro rem repellendus veritatis ad officia asperiores fuga, corporis eum temporibus, saepe dolorem eaque ipsam! Libero eos, exercitationem nam unde officia voluptatibus autem expedita distinctio. Magnam eos voluptas earum, deserunt consequatur alias veniam esse. Asperiores vel laudantium error ducimus mollitia, dolorem tenetur porro aliquid eius!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum consectetur dolore laboriosam minima molestiae vitae perspiciatis, consequatur quo, veniam illo ullam mollitia accusantium ipsum modi tenetur reprehenderit explicabo alias.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum consectetur dolore laboriosam minima molestiae vitae perspiciatis, consequatur quo, veniam illo ullam mollitia accusantium ipsum modi tenetur reprehenderit explicabo alias. Sunt quos molestias voluptatem voluptatibus, enim deserunt perferendis, tempora commodi qui quod delectus. Pariatur officiis nihil quasi ratione sint molestiae quibusdam quia repellat recusandae ipsum aperiam porro rem repellendus veritatis ad officia asperiores fuga, corporis eum temporibus, saepe dolorem eaque ipsam! Libero eos, exercitationem nam unde officia voluptatibus autem expedita distinctio. Magnam eos voluptas earum, deserunt consequatur alias veniam esse. Asperiores vel laudantium error ducimus mollitia, dolorem tenetur porro aliquid eius!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
