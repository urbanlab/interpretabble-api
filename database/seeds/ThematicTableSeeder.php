<?php

use Illuminate\Database\Seeder;
use App\Thematic;

class ThematicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thematic::create(['name' => 'Alimentation',]);
        Thematic::create(['name' => 'Sommeil',]);
        Thematic::create(['name' => 'Santé',]);
    }
}
