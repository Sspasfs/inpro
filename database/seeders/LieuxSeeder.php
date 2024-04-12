<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lieux;

class LieuxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lieux::create([
            'name' => 'Lieu 1',
            'quantity' => 10,
        ]);

        Lieux::create([
            'name' => 'Lieu 2',
            'quantity' => 5,
        ]);
    }
};
