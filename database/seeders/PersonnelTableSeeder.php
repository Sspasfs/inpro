<?php

use Illuminate\Database\Seeder;
use App\Models\Personnel;
use Faker\Factory as Faker;

class PersonnelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $ecoles = [
            'AFTEC',
            'Ipac Bachelor Factory',
            'Studio M',
            'MydigitalSchool',
            'MBWAY',
            'IHECF',
            'WIN',
            'ALLIANCE',
        ];

        for ($i = 0; $i < 10; $i++) {
            Personnel::create([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'ecole' => $ecoles[array_rand($ecoles)],
            ]);
        }
    }
}