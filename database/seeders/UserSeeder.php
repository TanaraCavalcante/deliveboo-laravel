<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = Helpers::getCsv(__DIR__ . '/user_seeder.csv');
        foreach ($userData as $indice => $riga) {
            if ($indice != 0) {
                $newUser = new User();
                $newUser->name = $riga[0];
                $newUser->email = $riga[1];
                $newUser->password = $riga[2];

                $newUser->save();

            }
        }

    }
}
