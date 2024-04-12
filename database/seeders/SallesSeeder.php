<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Salle;

class SallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créez des exemples de salles
        Salle::create([
            'name' => 'Salle 1',
            'lieux_id' => 1, // L'ID du lieu auquel cette salle appartient
        ]);

        Salle::create([
            'name' => 'Salle 2',
            'lieux_id' => 2, // L'ID du lieu auquel cette salle appartient
        ]);

        // Ajoutez plus d'exemples selon vos besoins
    }
};
