<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Vehicle');

        for ($i = 1; $i <= 10; $i++) {
            DB::table('vehicles')->insert([
                'modelo'=> $faker->sentence(),
                'marca' => $faker->sentence(),
                'placa' => $faker->randomNumber,
                'tipo'  => $faker->sentence(),
                'id_people'=>$i,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
