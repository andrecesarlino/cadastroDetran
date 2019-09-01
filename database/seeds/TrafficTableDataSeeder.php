<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TrafficTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Traffic');

        for ($i = 1; $i <= 10; $i++) {
            DB::table('traffic')->insert([
                'id_vehicle'=>$i,
                'valor'=> $faker->randomFloat,
                'prazo' => $faker->dateTime(),
                'status' => $faker->randomNumber,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
