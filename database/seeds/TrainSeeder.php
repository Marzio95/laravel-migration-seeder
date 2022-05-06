<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 300; $i++) {
            $trainData = [
                'azienda'               => $faker->word(),
                'stazione_di_partenza'  => $faker->city(),
                'stazione_di_arrivo'    => $faker->city(),
                'orario_di_partenza'    => $faker->time('H:i'),
                'orario_di_arrivo'      => $faker->time('H:i'),
                'codice_treno'          => $faker->creditCardNumber(),
                'numero_carrozze'       => $faker->numberBetween(5, 15),
                'in_orario'             => $faker->randomElement(['SI', 'NO']),
                'cancellato'            => $faker->randomElement(['SI', 'NO']),
                'prezzo_biglietto'      => $faker->numberBetween(10, 24),
                'data_treno'            => $faker->date('2022/m/d'),
            ];

            $newTrain = new Train();
            $newTrain->fill($trainData);
            $newTrain->save();
        }
    }
}
