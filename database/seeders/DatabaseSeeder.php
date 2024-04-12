<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CategorySeeder::class);
        $this->call(PersonnelTableSeeder::class);
        $this->call(LieuxSeeder::class);
        $this->call(SallesSeeder::class);
        $this->call(ProduitsTableSeeder::class);
        
    }
}
