<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [   "user_id" => 1, //! questo Id deve essere uguale al ID em users
                "name" => "Italia Pizza",
                "address" => "Via Roma, 132, Milano",
                "PIva" => "15875624035",
                "image" => "..." //! photo
            ],

        ];

        foreach ($restaurants as $restaurant){
            $newRestaurant = Restaurant::create($restaurant);
        }
    }
}
