<?php

use Illuminate\Database\Seeder;
use App\Post;

class DatabaseSeeder extends Seeder{

    public function run(){

        factory(App\Post::class, 50)->create();//cantidad de datos falsos

    }
}
