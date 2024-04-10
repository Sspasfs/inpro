<?php

namespace Database\Seeders;

use App\Models\Produits;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Ordinateur Portable',
            'Souris',
            'Clavier',
            'Souris et clavier',
            'Téléphone Portable',
            'Cable HDMI',
        ];

        $fournisseurs = [
            'InmacWstore',
            'Boulanger',
            'Ingelan',
            'SFR',
            'Orange',
            'Amazon',
        ];

        $etats = [
            'Très bon',
            'Bon',
            'Mauvais',
            'Hors service',
            'En réparation',
            'A donner',
        ];

        $lieux = \App\Models\Lieux::all();
        $salles = \App\Models\Salle::all();

        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 50; $i++) {
            $produit = new Produits();
            $produit->name = $faker->randomElement($categories);
            $produit->category = $produit->name;
            $produit->serialnumber = $faker->unique()->regexify('[A-Z0-9]{8}');
            $produit->lieu = $faker->randomElement($lieux->pluck('id')->toArray());
            $produit->salle_id = $faker->randomElement($salles->pluck('id')->toArray());
            $produit->fournisseur = $faker->randomElement($fournisseurs);
            $produit->etat = $faker->randomElement($etats);
            $produit->achat = $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d');
            $produit->save();

            if ($produit->category === 'Téléphone Portable') {
                $produit->imei = $faker->regexify('[0-9]{15}');
                $produit->save();
            }
        }
    }
}