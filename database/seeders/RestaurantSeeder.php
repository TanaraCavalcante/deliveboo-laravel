<?php

namespace Database\Seeders;

use App\Functions\Helpers;
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

    }
}
