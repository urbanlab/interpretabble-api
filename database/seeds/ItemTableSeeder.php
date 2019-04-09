<?php

use Illuminate\Database\Seeder;
use App\Item;
class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        //Article::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Item::create([
                'name' => $faker->sentence,
                'medias' => $faker->sentence,
                'children' => 1,
            ]);
        }
    }
}
