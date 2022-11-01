<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Category::create([
            'name' => 'Politics',
            'picture' => 'user.png',
        ]);

        Category::create([

            'name' => 'Fashion',
            'picture' => 'user.png',
        ]);

        Category::create([

            'name' => 'Travel',
            'picture' => 'user.png',
        ]);

        Category::create([

            'name' => 'TV And Films',
            'picture' => 'user.png',
        ]);
    }
}
