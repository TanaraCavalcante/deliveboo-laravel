<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plates = [
            ["name" => "Carbonara",
             "description" => "La carbonara è un piatto classico della cucina italiana, originario di Roma, ed è molto apprezzato per la sua semplicità e il suo sapore delizioso.",
             "ingredients" => "spaghetti, guanciale, uova, peper, formaggio",
             "price" => 8.90,
             "visibility" => true,
             "image" => "carbonara.image" //! image
            ],
        ];

        
    }
}