<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            /**
     * Run the database seeds.
     */
        $restaurants = Restaurant::all();
        $typesId = Type::all()->pluck('id');

        foreach ($restaurants as $restaurant) {
        // $restaurant->types()->sync($typesId);
    }

    }
}
