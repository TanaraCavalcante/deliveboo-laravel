<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //vado a prendere i dati dal mio csv euso il metodo creato per aprirlo in lettura
        $restaurantData = Helpers::getCsv(__DIR__ . '/seeder_ristorante.csv');
        foreach ($restaurantData as $indice => $riga) {
            if ($indice != 0) {

                $rawTypes = explode(",", $riga[4]);
                $typesToBeAssociated = array();

                foreach($rawTypes as $rawType) {
                    // per pulire dagli spazi nel csv che legge
                    $cleanedType = trim($rawType);
                    // per vedere in console cosa fa il seeder
                    $this->command->comment('Looking for Type ' . $cleanedType);
                    
                    $type = Type::where('name', '=', $cleanedType)->firstOrFail();
                    $typesToBeAssociated[] = $type;
                }

                $newRestaurant = new Restaurant();
                $newRestaurant->user_id = $riga[1];
                $newRestaurant->name = $riga[0];
                $newRestaurant->address = $riga[2];
                $newRestaurant->piva = $riga[3];

                $newRestaurant->save();
                // qui vado ad associare al restaurant id appena creato i type_id corrispondenti
                // ai nomi dei tipi presenti nel csv
                foreach($typesToBeAssociated as $typeToAssociate) {
                    $newRestaurant->types()->attach($typeToAssociate->id);
                }

            }
        }


    }
}
