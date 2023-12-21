<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = Faker::create();
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
            'Data_di_partenza' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'stato' => $faker->boolean,
        ]);
    }
}
