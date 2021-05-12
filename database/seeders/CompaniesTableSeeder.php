<?php

namespace Database\Seeders;
use App\Models\Companie;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();

        for ($i=0;$i<=3;$i++){
            Companie::create([
                'name' => $faker->company,
                'description' => $faker->catchPhrase,
                'nit' => $faker->bankAccountNumber,
                'phone' => $faker->phoneNumber
            ]);
        }

    }
}
