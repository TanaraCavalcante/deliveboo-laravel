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
            ['name' => 'Italiano', 'description' => "Cucina tradizionale italiana con piatti iconici come pizza, pasta, lasagne e risotti, preparati con ingredienti freschi e stagionali."],
            ['name' => 'Cinese', 'description' => "Cucina cinese autentica con piatti tipici come riso fritto, ravioli al vapore, anatra alla pechinese e zuppe speziate."],
            ['name' => 'Messicano', 'description' => "Sapori vivaci e speziati della cucina messicana, inclusi tacos, burritos, enchiladas e guacamole preparato al momento."],
            ['name' => 'Indiano', 'description' => "Cucina ricca e speziata con curry, tandoori, samosa e pane naan, perfetta per chi ama sapori intensi e variegati."],
            ['name' => 'Giapponese', 'description' => "Cucina raffinata giapponese con sushi, sashimi, ramen, tempura e piatti di pesce fresco preparati con maestria."],
            ['name' => 'Vegetariano', 'description' => "Cucina vegetariana con un mix di piatti salutari e gustosi, a base di verdure fresche, legumi e cereali integrali."],
            ['name' => 'Vegano', 'description' => "Cucina vegana che esclude tutti i prodotti di origine animale, offrendo piatti creativi e nutrienti a base di ingredienti 100% vegetali."],
            ['name' => 'Fast Food', 'description' => "Pasti veloci e pratici, inclusi hamburger, patatine fritte, hot dog e snack perfetti per uno spuntino rapido."],
            ['name' => 'Mediterraneo', 'description' => "Cucina mediterranea ricca di sapori genuini, con piatti come insalate, pesce alla griglia, hummus e pane pita."],
            ['name' => 'Francese', 'description' => "Cucina elegante francese con piatti classici come croissant, coq au vin, ratatouille e dolci raffinati."],
            ['name' => 'Americano', 'description' => "Cucina americana con una varietà di piatti, dai barbecue e bistecche agli hamburger gourmet e milkshake."],
            ['name' => 'Thailandese', 'description' => "Sapori unici della cucina thailandese, con piatti speziati come pad thai, curry verde e zuppe al latte di cocco."],
            ['name' => 'Spagnolo', 'description' => "Cucina spagnola con tapas, paella, gazpacho e una grande varietà di piatti regionali accompagnati da vini pregiati."],
            ['name' => 'Tedesco', 'description' => "Cucina tedesca tradizionale con bratwurst, pretzel, schnitzel e birre artigianali."],
            ['name' => 'Fusion', 'description' => "Cucina fusion che combina elementi di diverse tradizioni culinarie per creare piatti innovativi e sorprendenti."],
            ['name' => 'Mediorientale', 'description' => "Piatti tipici del Medio Oriente come falafel, kebab, tabbouleh e dolci al miele e frutta secca."],
            ['name' => 'Africano', 'description' => "Cucina africana ricca di spezie e sapori, con piatti come couscous, tajine, injera e zuppe speziate."],
            ['name' => 'Coreano', 'description' => "Cucina coreana con piatti iconici come kimchi, bulgogi, bibimbap e barbecue coreano."],
            ['name' => 'Greco', 'description' => "Cucina greca con moussaka, souvlaki, tzatziki e un’ampia selezione di piatti a base di pesce e verdure fresche."],
            ['name' => 'Brasiliano', 'description' => "Cucina brasiliana con specialità come churrasco, feijoada, pão de queijo e cocktail a base di frutta tropicale."],
        ];

        foreach($typesNames as $typeName){
            $newType = new Type();
            $newType->name = $typeName;
            $newType->description = $typeName;
            $newType->save();
        }
    }
}
