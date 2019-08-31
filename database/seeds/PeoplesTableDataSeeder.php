<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PeoplesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Peoples');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('peoples')->insert([
                'nome' => $faker->sentence(),
                'cpfcnpj'=>$faker->randomNumber,
                'endereco'=>$faker->sentence(),
                'telefone'=>$faker->randomNumber,
                'celular'=>$faker->randomNumber,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
