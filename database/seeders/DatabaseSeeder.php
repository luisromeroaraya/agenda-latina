<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=> 'Admin',
            'username'=> 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('secret')
        ]);

        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        $user3 = User::factory()->create();
        $user4 = User::factory()->create();

        $category1 = Category::create(['name' => 'Fiesta']);
        $category2 = Category::create(['name' => 'Concierto']);
        $category3 = Category::create(['name' => 'Deportes']);
        $category4 = Category::create(['name' => 'Festival']);
        $category5 = Category::create(['name' => 'Exposición']);
        $category6 = Category::create(['name' => 'Teatro']);
        $category7 = Category::create(['name' => 'Cine']);
        $category8 = Category::create(['name' => 'Danza']);
        $category9 = Category::create(['name' => 'Infantil']);
        $category10 = Category::create(['name' => 'Conferencia']);
        $category11 = Category::create(['name' => 'Otros']);

        // Eventos creados por el admin
        Event::factory(3)->create([
            "user_id" => $admin->id,
            "category_id" => $category1->id,
            "highlight" => 1
        ]);

        // Eventos creados por usuarios random
        Event::factory(3)->create([
            "user_id" => $user1->id,
            "category_id" => $category2->id
        ]);
        Event::factory(3)->create([
            "user_id" => $user1->id,
            "category_id" => $category3->id
        ]);
        Event::factory(3)->create([
            "user_id" => $user1->id,
            "category_id" => $category4->id
        ]);

        Event::factory(3)->create([
            "user_id" => $user2->id,
            "category_id" => $category5->id
        ]);

        Event::factory(3)->create([
            "user_id" => $user2->id,
            "category_id" => $category6->id
        ]);

        Event::factory(3)->create([
            "user_id" => $user2->id,
            "category_id" => $category7->id
        ]);

        Event::factory(3)->create([
            "user_id" => $user3->id,
            "category_id" => $category8->id
        ]);

        Event::factory(3)->create([
            "user_id" => $user3->id,
            "category_id" => $category9->id
        ]);

        Event::factory(3)->create([
            "user_id" => $user3->id,
            "category_id" => $category10->id
        ]);

        Event::factory(9)->create([
            "user_id" => $user4->id,
            "category_id" => $category11->id
        ]);

        Article::factory(3)->create(["highlight" => 1]);
        Article::factory(9)->create();
    }
}
