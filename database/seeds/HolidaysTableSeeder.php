<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $holiday = new Holiday();
        // $holiday->destination = 'Casorezzo';
        // $holiday->days = 14;
        // $holiday->name_hotel = 'Seue B&B';
        // $holiday->name_operator = 'Gaspare Pantaloncini';
        // $holiday->price = 79.99;
        // $holiday->people = 10;
        // $holiday->save();

        for($i = 0; $i < 10; $i++) {
            $holiday = new Holiday();
            $holiday->destination = $faker->state();
            $holiday->days = $faker->numberBetween(2, 15);
            $holiday->name_hotel = $faker->company();
            $holiday->name_operator = $faker->name();
            $holiday->price = $faker->randomFloat(2);
            $holiday->people = $faker->numberBetween(1, 10);
            $holiday->save();
        }
    }
}
