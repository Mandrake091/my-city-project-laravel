<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $newPost = new Product();
            $newPost->title = $faker->words(2, true);

            $newPost->price =
                $faker->randomNumber(3, false);

            $newPost->publish_date =
                $faker->date();
            $newPost->save();
        }
    }
}