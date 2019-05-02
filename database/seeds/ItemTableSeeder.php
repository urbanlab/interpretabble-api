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

        // ALIMENTATION
        Item::create([
            'name' => 'alimentation',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'feculents_viandes_sucres_gras',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'fruits_legumes',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'lait_artificiel',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'position_allaitement',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'problemes_alimentaires',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'selles_urine_regurgitation',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);

        // SANTE
        Item::create([
            'name' => 'sante',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'accouchement',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'asthme_allergies',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'douleurs_fievre',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'grossesse',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'hanche',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'hygiene',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'medication',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'problemes_cutanes',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);

        // SOMMEIL
        Item::create([
            'name' => 'sommeil',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'phases_sommeil',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
        Item::create([
            'name' => 'securite_lit',
            'medias' => ["default/interfaces-23.png", "default/interfaces-24.png", "default/interfaces-25.png", "default/interfaces-26.png"],
            'card_id' => 0,
            'card_picture' => 'default/carte.jpeg',
            'thematic_id' => 0
        ]);
    }
}
