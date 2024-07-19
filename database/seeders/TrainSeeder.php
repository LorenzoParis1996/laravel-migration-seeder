<?php

namespace Database\Seeders;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        for($i=0; $i < 10; $i++) {
            $newTrains = new Train();
            $newTrains->azienda = $faker->words(2, true);
            $newTrains->stazione_partenza = $faker->words(3,true);
            $newTrains->stazione_arrivo = $faker->words(3, true);
            $newTrains->orario_partenza = $faker->dateTime();
            $newTrains->orario_arrivo = $faker->dateTime();
            $newTrains->codice_treno = $faker->randomNumber(8, true);
            $newTrains->numero_carrozze = $faker->randomNumber(1, false);
            $newTrains->in_orario = $faker->boolean();
            $newTrains->cancellato = $faker->boolean();
            $newTrains->save();
        }
    }
}