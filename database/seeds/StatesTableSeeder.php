<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\State');

        for ($i = 1; $i <= 10; $i++) {
            DB::table('states')->insert([
                'nome' => $faker->sentence(),
                'uf' => $faker->word(2),
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
