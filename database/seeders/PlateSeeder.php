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
            [
                "name" => "Bistecca alla Fiorentina",
                "description" => "Una succulenta bistecca di manzo cotta alla griglia, tipica della cucina toscana.",
                "ingredients" => "bistecca di manzo, olio d'oliva, rosmarino, sale grosso",
                "price" => 20.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/8753745/pexels-photo-8753745.jpeg"
            ],
            [
                "name" => "Focaccia Genovese",
                "description" => "Pane soffice con olio d'oliva, rosmarino e sale grosso, tipico della Liguria.",
                "ingredients" => "farina, olio d'oliva, rosmarino, sale grosso",
                "price" => 4.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/95217/pexels-photo-95217.jpeg"
            ],
            [
                "name" => "Contorno di Verdure Grigliate",
                "description" => "Un assortimento di verdure grigliate come zucchine, peperoni e melanzane, condite con olio e aromi.",
                "ingredients" => "zucchine, peperoni, melanzane, olio d'oliva, rosmarino",
                "price" => 5.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/8522690/pexels-photo-8522690.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Pizza Margherita",
                "description" => "Una pizza classica con pomodoro fresco, mozzarella di bufala e basilico, simbolo della cucina napoletana.",
                "ingredients" => "pomodoro, mozzarella di bufala, basilico, olio d'oliva",
                "price" => 7.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/29609013/pexels-photo-29609013/free-photo-of-autentica-pizza-napoletana-con-basilico-fresco.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Pizza Diavola",
                "description" => "Una pizza piccante con pomodoro, mozzarella, salame piccante, peperoncino e olio d'oliva.",
                "ingredients" => "pomodoro, mozzarella, salame piccante, peperoncino, olio d'oliva",
                "price" => 8.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/29608924/pexels-photo-29608924.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Pizza Vegetariana",
                "description" => "Una pizza salutare con pomodoro, mozzarella, zucchine, peperoni, melanzane e olive.",
                "ingredients" => "pomodoro, mozzarella, zucchine, peperoni, melanzane, olive",
                "price" => 8.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/16203829/pexels-photo-16203829/free-photo-of-verdure-pizza-cena-pasto.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Pizza Hawaii",
                "description" => "Una pizza dolce e salata con pomodoro, mozzarella, prosciutto cotto e ananas.",
                "ingredients" => "pomodoro, mozzarella, prosciutto cotto, ananas",
                "price" => 8.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/20115309/pexels-photo-20115309/free-photo-of-pizza-cena-pasto-formaggio.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Pizza Quattro Formaggi",
                "description" => "Una pizza cremosa con un mix di formaggi: mozzarella, gorgonzola, parmigiano e fontina, per un sapore ricco e avvolgente.",
                "ingredients" => "mozzarella, gorgonzola, parmigiano, fontina, olio d'oliva",
                "price" => 9.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/15478006/pexels-photo-15478006/free-photo-of-cibo-piastre-pizza-pasto.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Pizza Tonno e Cipolla",
                "description" => "Una pizza saporita con tonno, cipolla rossa, mozzarella e un tocco di olio d'oliva per un sapore unico.",
                "ingredients" => "pomodoro, mozzarella, tonno, cipolla rossa, olio d'oliva",
                "price" => 8.90,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/28293573/pexels-photo-28293573.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            

        ];

        foreach ($plates as $plate){
            $newPlate = Plate::create([$plate]);
        }
    }
}
