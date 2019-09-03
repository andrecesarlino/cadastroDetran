<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\City');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('cities')->insert([
                'id_state'=>$i,
                'nome' => $faker->city,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
