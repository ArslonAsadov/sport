<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name'=>'Cricket']);
        Category::create(['name'=>'Football']);
        Category::create(['name'=>'Hockey']);
        Category::create(['name'=>'Tennis']);
        Category::create(['name'=>'Basketball']);
        Category::create(['name'=>'Golf']);
        Category::create(['name'=>'Cycling']);
        Category::create(['name'=>'Motorsports']);
    }
}













