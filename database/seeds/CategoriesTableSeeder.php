<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['title' => 'Sport']);
        Category::create(['title' => 'News']);
        Category::create(['title' => 'Fashion']);
        Category::create(['title' => 'Lifestyle']);
    }
}
