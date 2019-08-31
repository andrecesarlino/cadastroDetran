<?php

use Illuminate\Database\Seeder;

class CitiesTableDataSeeder extends Seeder
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
            DB::table('Cities')->insert([
                'nome' => $faker->sentence(),
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
