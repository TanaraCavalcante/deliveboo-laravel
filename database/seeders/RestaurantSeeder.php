<?php

namespace Database\Seeders;

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
            [
                "name" => "Pizza Italia",
                "address" => "Via Roma, 132, Milano",
                "Piva" => "15875624035",
                "image" => "?" 
            ],

        ];
    }
}
