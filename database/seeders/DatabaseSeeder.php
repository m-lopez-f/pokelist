<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $typePoison = \App\Models\Type::create([
            'name' => 'Poison',
            'key' => 'veneno'
        ]);

        $typeFire = \App\Models\Type::create([
            'name' => 'Fire',
            'key' => 'fuego'
        ]);

        $typeWater = \App\Models\Type::create([
            'name' => 'Water',
            'key' => 'agua'
        ]);

        $typeGrass = \App\Models\Type::create([
            'name' => 'Grass',
            'key' => 'planta'
        ]);

        $typeNormal = \App\Models\Type::create([
            'name' => 'Normal',
            'key' => 'normal'
        ]);

        $moveScratch = \App\Models\Move::create([
            'name' => 'Scratch',
            'key' => 'scratch',
            'type_id' => $typeGrass->id,
            'power' => 40
        ]);
        $moveEmber = \App\Models\Move::create([
            'name' => 'Ember',
            'key' => 'ember',
            'type_id' => $typeFire->id,
            'power' => 40
        ]);
        $moveTackle = \App\Models\Move::create([
            'name' => 'Tackle',
            'key' => 'tackle',
            'type_id' => $typeNormal->id,
            'power' => 40
        ]);
        $moveWaterGun = \App\Models\Move::create([
            'name' => 'Water Gun',
            'key' => 'water-gun',
            'type_id' => $typeWater->id,
            'power' => 40
        ]);
        $moveVineWhip = \App\Models\Move::create([
            'name' => 'Vine Whip',
            'key' => 'vine-whip',
            'type_id' => $typeGrass->id,
            'power' => 45
        ]);
        $moveRapidSpin = \App\Models\Move::create([
            'name' => 'Rapid Spin',
            'key' => 'rapid-spin',
            'type_id' => $typeNormal->id,
            'power' => 50
        ]);

        $pokemon1 = \App\Models\Pokemon::create([
            'name' => 'Bulbasaur',
            'key' => 'bulbasaur',
            'level' => 13,
            'national_id' => '0001',
            'actual_ps' => 45,
            'total_ps' => 45,
            'base_attack' => 49, 
            'base_defense' => 49,
            'base_special_attack' => 65,
            'base_special_defense' => 65,
            'base_speed' => 45,
        ]);

        $pokemon1->types()->sync([$typePoison->id, $typeGrass->id]);
        $pokemon1->moves()->sync([
            $moveTackle->id,
            $moveVineWhip->id
        ]);

        $pokemon2 = \App\Models\Pokemon::create([
            'name' => 'Charmander',
            'key' => 'charmander',
            'level' => 13,
            'national_id' => '0004',
            'actual_ps' => 39,
            'total_ps' => 39,
            'base_attack' => 52, 
            'base_defense' => 43,
            'base_special_attack' => 60,
            'base_special_defense' => 50,
            'base_speed' => 65,
        ]);

        $pokemon2->types()->attach($typeFire->id);
        $pokemon2->moves()->sync([
            $moveScratch->id,
            $moveEmber->id
        ]);

        $pokemon3 = \App\Models\Pokemon::create([
            'name' => 'Squirtle',
            'key' => 'squirtle',
            'level' => 13,
            'national_id' => '0007',
            'actual_ps' => 44,
            'total_ps' => 44,
            'base_attack' => 48, 
            'base_defense' => 65,
            'base_special_attack' => 50,
            'base_special_defense' => 64,
            'base_speed' => 43,
        ]);

        $pokemon3->types()->attach($typeWater->id);
        $pokemon3->moves()->sync([
            $moveTackle->id,
            $moveWaterGun->id,
            $moveRapidSpin->id
        ]);
    }
}
