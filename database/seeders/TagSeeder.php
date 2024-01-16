<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags =[
          ['name'=>'Cricket'],
          ['name'=>'Football'],
          ['name'=>'Hockey'],
          ['name'=>'Tennis'],
          ['name'=>'Basketball'],
          ['name'=>'Golf'],
          ['name'=>'Cycling'],
          ['name'=>'Motorsports'],
        ];
        Tag::insert($tags);
    }
}
