<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typesNames = [
            ['name' => 'Italiano', 'description' => "La cucina italiana è una delle tradizioni gastronomiche più amate al mondo, caratterizzata da una grande varietà di piatti regionali e dall'uso di ingredienti freschi e di qualità.",'logo'=>''],
            ['name' => 'Cinese', 'description' => "La cucina cinese è ricca e variegata, con piatti iconici come riso fritto, ravioli al vapore, anatra alla pechinese e zuppe speziate.",'logo'=>''],
            ['name' => 'Messicano', 'description' => "La cucina messicana offre sapori vivaci e speziati con tacos, burritos, enchiladas e guacamole fresco.",'logo'=>''],
            ['name' => 'Indiano', 'description' => "La cucina indiana è famosa per i suoi curry aromatici, tandoori, samosa e il pane naan, con un uso sapiente di spezie.",'logo'=>''],
            ['name' => 'Sushi-Giapponese', 'description' => "La cucina giapponese propone piatti raffinati come sushi, sashimi, ramen, tempura e pesce fresco preparato con maestria.",'logo'=>''],
            ['name' => 'Vegetariano', 'description' => "La cucina vegetariana offre piatti gustosi e salutari, preparati con verdure fresche, legumi e cereali integrali.",'logo'=>''],
            ['name' => 'Vegano', 'description' => "La cucina vegana esclude prodotti animali, offrendo piatti creativi e nutrienti a base di ingredienti vegetali al 100%.",'logo'=>''],
            ['name' => 'Hamburger', 'description' => "La cucina hamburger include pasti veloci e sfiziosi come hamburger, patatine fritte, hot dog e snack gustosi.",'logo'=>''],
            ['name' => 'Pizza', 'description' => "La pizza, simbolo della cucina italiana, combina una base croccante con ingredienti genuini come mozzarella, pomodoro e basilico.",'logo'=>''],
            ['name' => 'Focacce', 'description' => "Le focacce italiane sono soffici e fragranti, spesso arricchite con olio d'oliva, erbe aromatiche o farciture gustose.",'logo'=>''],
            ['name' => 'Americano', 'description' => "La cucina americana spazia dai barbecue e bistecche agli hamburger gourmet e dolci come i brownie.",'logo'=>''],
            ['name' => 'Thailandese', 'description' => "La cucina thailandese offre piatti aromatici e speziati, come pad thai, curry verde e zuppe al latte di cocco.",'logo'=>''],
            ['name' => 'Pinsa', 'description' => "La pinsa è una variante della pizza italiana, con un impasto leggero e croccante, condito con ingredienti freschi.",'logo'=>''],
            ['name' => 'Panini', 'description' => "I panini italiani sono farciti con salumi, formaggi e verdure fresche, ideali per uno spuntino pratico e saporito.",'logo'=>''],
            ['name' => 'Kebab', 'description' => "Il kebab offre carne speziata e grigliata, servita con verdure e salse in pane pita o piatti combinati.",'logo'=>''],
            ['name' => 'Poke', 'description' => "La cucina hawaiana del poke combina pesce fresco marinato, riso e ingredienti colorati per un pasto leggero e nutriente.",'logo'=>''],
            ['name' => 'Dolci', 'description' => "I dolci tradizionali spaziano da torte e biscotti a dessert al cucchiaio come tiramisù e panna cotta.",'logo'=>''],
            ['name' => 'Pollo', 'description' => "La cucina a base di pollo offre piatti saporiti e versatili, come pollo arrosto, fritto o speziato.",'logo'=>''],
            ['name' => 'Piadine', 'description' => "Le piadine italiane sono sottili e farcite con ingredienti freschi, perfette per pasti veloci e gustosi.",'logo'=>''],
            ['name' => 'Brasiliano', 'description' => "La cucina brasiliana propone specialità come churrasco, feijoada e pão de queijo, spesso accompagnate da cocktail tropicali.",'logo'=>''],
            ['name' => 'Gluten-free', 'description' => "La cucina senza glutine offre piatti sani e gustosi, adatti a chi ha intolleranze alimentari o preferisce alternative leggere.",'logo'=>'']
        ];
        foreach ($typesNames as $typeName) {
            $newType = new Type();
            $newType->name = $typeName['name'];
            $newType->description = $typeName['description'];
            // $newType->description = $typeName['logo'];
            $newType->save();
        }
    }
}
