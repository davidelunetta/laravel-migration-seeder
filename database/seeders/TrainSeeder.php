<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Train;
use Faker\Factory as Faker;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Puoi cambiare il numero di treni da generare
            Train::create([
                'Azienda' => $faker->company,
                'Stazione_di_partenza' => $faker->city,
                'Stazione_di_arrivo' => $faker->city,
                'Orario_di_partenza' => $faker->time($format = 'H:i:s'),
                'Orario_di_arrivo' => $faker->time($format = 'H:i:s'),
                'Codice_Treno' => $faker->randomNumber($nbDigits = 6, $strict = true),
                'Numero_Carrozze' => $faker->numberBetween($min = 1, $max = 15),
                'In_orario' => $faker->boolean,
                'Cancellato' => $faker->boolean,
                'Data_di_partenza' => $faker->date,
                'stato' => $faker->boolean,
            ]);
    }
}
}
