<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([UserSeeder::class, CategorySeeder::class]);

        $user= User::all();
        $category= Category::all();
        Blog::factory(100)->recycle([
            $user,
            $category
        ])->create();
    }
}
