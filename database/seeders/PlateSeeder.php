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
            ["name" => "Carbonara",
             "description" => "La carbonara è un piatto classico della cucina italiana, originario di Roma, ed è molto apprezzato per la sua semplicità e il suo sapore delizioso.",
             "ingredients" => "spaghetti, guanciale, uova, peper, formaggio",
             "price" => 8.90,
             "visibility" => true,
             "image" => "https://images.pexels.com/photos/546945/pexels-photo-546945.jpeg"
            ],
            [
                "name" => "Spaghetti Aglio, Olio e Peperoncino",
                "description" => "Un piatto veloce ma saporito con aglio, olio d'oliva e peperoncino, perfetto per chi ama il gusto forte.",
                "ingredients" => "spaghetti, aglio, olio d'oliva, peperoncino, prezzemolo",
                "price" => 6.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/14899491/pexels-photo-14899491.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Lasagna alla Bolognese",
                "description" => "Uno dei piatti più amati, con strati di pasta fresca, ragù alla bolognese, besciamella e parmigiano.",
                "ingredients" => "pasta, ragù, besciamella, parmigiano, carne macinata",
                "price" => 10.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/27583251/pexels-photo-27583251/free-photo-of-cibo-piastre-italiano-cena.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Gnocchi alla Sorrentina",
                "description" => "Gnocchi di patate conditi con una salsa di pomodoro, mozzarella fusa e basilico.",
                "ingredients" => "gnocchi, pomodoro, mozzarella, basilico",
                "price" => 9.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/3590401/pexels-photo-3590401.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Pasta al Pesto",
                "description" => "Pasta condita con pesto alla genovese, preparato con basilico fresco, pinoli, aglio, parmigiano e olio d'oliva.",
                "ingredients" => "pasta, basilico, pinoli, parmigiano, aglio, olio d'oliva",
                "price" => 9.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/1435896/pexels-photo-1435896.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Risotto ai Funghi",
                "description" => "Un risotto cremoso preparato con funghi freschi, brodo vegetale e una spruzzata di parmigiano.",
                "ingredients" => "riso, funghi porcini, brodo vegetale, parmigiano",
                "price" => 12.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/28442559/pexels-photo-28442559/free-photo-of-risotto-gourmet-con-funghi-su-piatto-elegante.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Parmigiana di Melanzane",
                "description" => "Melanzane fritte, ricoperte di salsa di pomodoro, mozzarella e parmigiano, cotte al forno.",
                "ingredients" => "melanzane, salsa di pomodoro, mozzarella, parmigiano",
                "price" => 8.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/19674153/pexels-photo-19674153/free-photo-of-piastre-ristorante-pranzo-cucinando.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Frittura di Calamari",
                "description" => "Calamari freschi fritti, serviti croccanti con una spolverata di sale e limone.",
                "ingredients" => "calamari, farina, olio di frittura, limone",
                "price" => 11.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/11160096/pexels-photo-11160096.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Bruschetta al Pomodoro",
                "description" => "Fette di pane tostato con pomodori freschi, basilico e olio d'oliva.",
                "ingredients" => "pane, pomodoro, basilico, olio d'oliva, aglio",
                "price" => 5.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/2998956/pexels-photo-2998956.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
        ];

        foreach ($plates as $plate){
            $newPlate = Plate::create([$plate]);
        }
    }
}