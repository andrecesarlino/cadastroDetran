<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TrafficsTableSeeder extends Seeder
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
            DB::table('traffics')->insert([
                'valor'=> $faker->randomFloat,
                'prazo' => $faker->dateTime(),
                'status' => $faker->randomNumber,
                'id_vehicle'=>$i,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
