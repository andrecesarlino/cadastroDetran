<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class VehicleTableDataSeeder extends Seeder
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
                'id_peoples'=>$i,
                'modelo'=> $faker->sentence(),
                'marca' => $faker->sentence(),
                'placa' => $faker->randomNumber,
                'tipo'  => $faker->sentence(),
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
