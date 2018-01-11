<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create(['title' => 'General' , 'slug' => 'general']);
        \App\Category::create(['title' => 'Installation' , 'slug' => 'installation']);
        \App\Category::create(['title' => 'Feature' , 'slug' => 'feature']);
        \App\Category::create(['title' => 'Suggestion' , 'slug' => 'suggestion']);

    }
}
