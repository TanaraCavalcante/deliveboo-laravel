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
            ['name' => 'Italiano', 'description' => "La cucina italiana è una delle tradizioni gastronomiche più amate al mondo, caratterizzata da una grande varietà di piatti regionali e dall'uso di ingredienti freschi e di qualità.",'logo'=>'/types-logo/italiano.jpg'],
            ['name' => 'Cinese', 'description' => "La cucina cinese è ricca e variegata, con piatti iconici come riso fritto, ravioli al vapore, anatra alla pechinese e zuppe speziate.",'logo'=>'/types-logo/cinese.jpg'],
            ['name' => 'Messicano', 'description' => "La cucina messicana offre sapori vivaci e speziati con tacos, burritos, enchiladas e guacamole fresco.",'logo'=>'/types-logo/messicano.jpg'],
            ['name' => 'Indiano', 'description' => "La cucina indiana è famosa per i suoi curry aromatici, tandoori, samosa e il pane naan, con un uso sapiente di spezie.",'logo'=>'/types-logo/indiano.jpg'],
            ['name' => 'Sushi-Giapponese', 'description' => "La cucina giapponese propone piatti raffinati come sushi, sashimi, ramen, tempura e pesce fresco preparato con maestria.",'logo'=>'/types-logo/sushi-giapponese.jpg'],
            ['name' => 'Vegetariano', 'description' => "La cucina vegetariana offre piatti gustosi e salutari, preparati con verdure fresche, legumi e cereali integrali.",'logo'=>'/types-logo/vegetariano.jpg'],
            ['name' => 'Vegano', 'description' => "La cucina vegana esclude prodotti animali, offrendo piatti creativi e nutrienti a base di ingredienti vegetali al 100%.",'logo'=>'/types-logo/vegano.jpg'],
            ['name' => 'Hamburger', 'description' => "La cucina hamburger include pasti veloci e sfiziosi come hamburger, patatine fritte, hot dog e snack gustosi.",'logo'=>'/types-logo/hamburger.jpg'],
            ['name' => 'Pizza', 'description' => "La pizza, simbolo della cucina italiana, combina una base croccante con ingredienti genuini come mozzarella, pomodoro e basilico.",'logo'=>'/types-logo/pizza.jpg'],
            ['name' => 'Focacce', 'description' => "Le focacce italiane sono soffici e fragranti, spesso arricchite con olio d'oliva, erbe aromatiche o farciture gustose.",'logo'=>'/types-logo/focaccia.jpg'],
            ['name' => 'Americano', 'description' => "La cucina americana spazia dai barbecue e bistecche agli hamburger gourmet e dolci come i brownie.",'logo'=>'/types-logo/americano.jpg'],
            ['name' => 'Thailandese', 'description' => "La cucina thailandese offre piatti aromatici e speziati, come pad thai, curry verde e zuppe al latte di cocco.",'logo'=>'/types-logo/thailandese.jpg'],
            ['name' => 'Pinsa', 'description' => "La pinsa è una variante della pizza italiana, con un impasto leggero e croccante, condito con ingredienti freschi.",'logo'=>'/types-logo/pinsa.jpg'],
            ['name' => 'Panini', 'description' => "I panini italiani sono farciti con salumi, formaggi e verdure fresche, ideali per uno spuntino pratico e saporito.",'logo'=>'/types-logo/panini.jpg'],
            ['name' => 'Kebab', 'description' => "Il kebab offre carne speziata e grigliata, servita con verdure e salse in pane pita o piatti combinati.",'logo'=>'/types-logo/kebab.jpg'],
            ['name' => 'Poke', 'description' => "La cucina hawaiana del poke combina pesce fresco marinato, riso e ingredienti colorati per un pasto leggero e nutriente.",'logo'=>'public\types-logo\poke.jpg'],
            ['name' => 'Dolci', 'description' => "I dolci tradizionali spaziano da torte e biscotti a dessert al cucchiaio come tiramisù e panna cotta.",'logo'=>'/types-logo/dolci.jpg'],
            ['name' => 'Pollo', 'description' => "La cucina a base di pollo offre piatti saporiti e versatili, come pollo arrosto, fritto o speziato.",'logo'=>'/types-logo/pollo.jpg'],
            ['name' => 'Piadine', 'description' => "Le piadine italiane sono sottili e farcite con ingredienti freschi, perfette per pasti veloci e gustosi.",'logo'=>'/types-logo/piadina.jpg'],
            ['name' => 'Brasiliano', 'description' => "La cucina brasiliana propone specialità come churrasco, feijoada e pão de queijo, spesso accompagnate da cocktail tropicali.",'logo'=>'/types-logo/brasiliano.jpg'],
            ['name' => 'Gluten-free', 'description' => "La cucina senza glutine offre piatti sani e gustosi, adatti a chi ha intolleranze alimentari o preferisce alternative leggere.",'logo'=>'/types-logo/gluten-free.jpg']
        ];
        foreach ($typesNames as $typeName) {
            $newType = new Type();
            $newType->name = $typeName['name'];
            $newType->description = $typeName['description'];
            $newType->save();
        }
    }
}
