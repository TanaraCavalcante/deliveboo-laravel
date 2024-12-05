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
            [
                "restaurant_id" => 1,
                "name" => "Pizza Margherita",
                "description" => "Una pizza classica con pomodoro fresco, mozzarella di bufala e basilico, simbolo della cucina napoletana.",
                "ingredients" => "pomodoro, mozzarella di bufala, basilico, olio d'oliva",
                "price" => 7.50,
                "visibility" => true,
                "image" => "margherita.jpeg"
            ],
            [
                "restaurant_id" => 1,
                "name" => "Marinara",
                "description" => "Una pizza semplice ma ricca di sapore, con pomodoro, aglio, origano, olio extravergine d'oliva e un tocco di basilico fresco.",
                "ingredients" => "pomodoro, aglio, origano, olio extravergine d'oliva, basilico",
                "price" => 6.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/12891059/pexels-photo-12891059.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "restaurant_id" => 1,
                "name" => "Pizza Diavola",
                "description" => "Una pizza piccante con pomodoro, mozzarella, salame piccante, peperoncino e olio d'oliva.",
                "ingredients" => "pomodoro, mozzarella, salame piccante, peperoncino, olio d'oliva",
                "price" => 8.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/3682837/pexels-photo-3682837.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "restaurant_id" => 1,
                "name" => "Pizza Vegetariana",
                "description" => "Una pizza salutare con pomodoro, mozzarella, zucchine, peperoni, melanzane e olive.",
                "ingredients" => "pomodoro, mozzarella, zucchine, peperoni, melanzane, olive",
                "price" => 8.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/16203829/pexels-photo-16203829/free-photo-of-verdure-pizza-cena-pasto.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "restaurant_id" => 1,
                "name" => "Pizza Hawaii",
                "description" => "Una pizza dolce e salata con pomodoro, mozzarella, prosciutto cotto e ananas.",
                "ingredients" => "pomodoro, mozzarella, prosciutto cotto, ananas",
                "price" => 8.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/20115309/pexels-photo-20115309/free-photo-of-pizza-cena-pasto-formaggio.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "restaurant_id" => 1,
                "name" => "Pizza Quattro Formaggi",
                "description" => "Una pizza cremosa con un mix di formaggi: mozzarella, gorgonzola, parmigiano e fontina, per un sapore ricco e avvolgente.",
                "ingredients" => "mozzarella, gorgonzola, parmigiano, fontina, olio d'oliva",
                "price" => 9.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/15478006/pexels-photo-15478006/free-photo-of-cibo-piastre-pizza-pasto.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "restaurant_id" => 1,
                "name" => "Pizza Tonno e Cipolla",
                "description" => "Una pizza saporita con tonno, cipolla rossa, mozzarella e un tocco di olio d'oliva per un sapore unico.",
                "ingredients" => "pomodoro, mozzarella, tonno, cipolla rossa, olio d'oliva",
                "price" => 8.90,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/28293573/pexels-photo-28293573.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],

        ];

        foreach ($plates as $plate){
            Plate::create($plate);
        }
    }
}