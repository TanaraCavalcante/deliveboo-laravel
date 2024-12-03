<?php

namespace Database\Seeders;

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
        $plates = [
            ["restaurant_id" => 1,
             "name" => "Carbonara",
             "description" => "La carbonara è un piatto classico della cucina italiana, originario di Roma, ed è molto apprezzato per la sua semplicità e il suo sapore delizioso.",
             "ingredients" => "spaghetti, guanciale, uova, peper, formaggio",
             "price" => 8.90,
             "visibility" => true,
             "image" => "https://images.pexels.com/photos/546945/pexels-photo-546945.jpeg"
            ],
        ];

        foreach ($plates as $plate){
            $newPlate = Plate::create($plate);
        }
    }
}