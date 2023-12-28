<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' =>'Riyadh Asjad Mulyadi',
            'email' => 'riyadh@gmail.com',
            'password' => bcrypt('123456'),
            ]);
    
        User::factory(3)->create();
    
        Article::factory(20)->create();
    
    }
}
