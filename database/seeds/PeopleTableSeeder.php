<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Person');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('people')->insert([
                'nome' => $faker->name,
                'cpfcnpj'=>$faker->randomNumber,
                'endereco'=>$faker->sentence(),
                'telefone'=>$faker->NumberBetween(1,99),
                'celular'=>$faker->randomNumber,
                'id_city'=>$i,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
