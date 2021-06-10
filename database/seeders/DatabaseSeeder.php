<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
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

        $category1 = Category::create(['name' => 'Concierto']);
        $category2 = Category::create(['name' => 'Fiesta']);
        $category3 = Category::create(['name' => 'Exhibición']);

        Event::factory(12)->create([
            "user_id" => $user1->id,
            "category_id" => $category1->id
        ]);

        Event::factory(15)->create([
            "user_id" => $user2->id,
            "category_id" => $category2->id
        ]);

        Event::factory(9)->create([
            "user_id" => $user3->id,
            "category_id" => $category3->id
        ]);
    }
}
