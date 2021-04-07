<?php

use Illuminate\Database\Seeder;
use App\Videogame;
use Faker\Generator as Faker;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 40; $i++) {

            $videogame = new Videogame();
            $videogame->title = $faker->word();
            $videogame->genre = $faker->word();
            $videogame->price = rand(1, 500);
            $videogame->save();
        }
    }
}
