<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Plate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plateData = Helpers::getCsv(__DIR__ . '/seeder_piatti.csv');
        foreach ($plateData as $indice => $riga) {
            if ($indice != 0) {
                $newPlate = new Plate();
                $newPlate->restaurant_id = $riga[0];
                $newPlate->name = $riga[1];
                $newPlate->price = $riga[2];
                $newPlate->ingredients = $riga[3];
                $newPlate->visibility = $riga[4];
                $newPlate->description = $riga[5];

                $newPlate->save();
            }
        }
    }
}
