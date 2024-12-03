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
                "name" => "Spaghetti alle Vongole",
                "description" => "Un piatto tipico della cucina italiana, con spaghetti conditi con vongole fresche, aglio, olio d'oliva, prezzemolo e un tocco di vino bianco.",
                "ingredients" => "spaghetti, vongole, aglio, olio d'oliva, prezzemolo, vino bianco",
                "price" => 12.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/20545318/pexels-photo-20545318/free-photo-of-piastre-pasto-pasta-minestra.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
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
                "name" => "Risotto ai Frutti di Mare",
                "description" => "Un risotto cremoso con una selezione di frutti di mare freschi, come gamberi, cozze e calamari, cucinato con brodo di pesce.",
                "ingredients" => "riso, gamberi, cozze, calamari, brodo di pesce, vino bianco, aglio",
                "price" => 16.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/28503604/pexels-photo-28503604/free-photo-of-risotto-gourmet-ai-frutti-di-mare-con-capesante-e-verdure.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
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
                "description" => "500g di calamari freschi fritti, serviti croccanti con una spolverata di sale e limone.",
                "ingredients" => "calamari, farina, olio di frittura, limone",
                "price" => 11.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/11160096/pexels-photo-11160096.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Filetto di Salmone alla Griglia",
                "description" => "Un delizioso filetto di salmone grigliato, servito con un contorno di verdure al vapore e una salsa al limone. Circa 300g per porzione.",
                "ingredients" => "filetto di salmone, limone, olio d'oliva, verdure al vapore",
                "price" => 14.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/7627414/pexels-photo-7627414.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Frittura Mista di Pesce",
                "description" => "Un piatto di 600g di pesce fresco, tra cui calamari, gamberi e piccole verdure, fritti croccanti e serviti con una spruzzata di limone.",
                "ingredients" => "calamari, gamberi, verdure miste, farina, olio di semi, limone",
                "price" => 14.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/16533150/pexels-photo-16533150/free-photo-of-pasto-arance-snack-spuntino.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Bruschetta al Pomodoro",
                "description" => "3 pezzi di fette di pane tostato con pomodori freschi, basilico e olio d'oliva.",
                "ingredients" => "pane, pomodoro, basilico, olio d'oliva, aglio",
                "price" => 2.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/2998956/pexels-photo-2998956.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Bistecca alla Fiorentina",
                "description" => "350g di Una succulenta bistecca di manzo cotta alla griglia, tipica della cucina toscana.",
                "ingredients" => "bistecca di manzo, olio d'oliva, rosmarino, sale grosso",
                "price" => 20.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/8753745/pexels-photo-8753745.jpeg"
            ],
            [
                "name" => "Pollo Fritto",
                "description" => "300g di pollo croccante e dorato, impanato e fritto fino alla perfezione, servito con una salsa barbecue e patatine fritte.",
                "ingredients" => "pollo, farina, uova, pangrattato, olio di semi, salsa barbecue, patatine fritte",
                "price" => 10.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/17282046/pexels-photo-17282046/free-photo-of-cibo-trama-cena-pranzo.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
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
                "name" => "Pattatine Fritte",
                "description" => "150g di pattatine fritte croccanti, dorate e servite con un pizzico di sale, ideali come accompagnamento per ogni piatto principale.",
                "ingredients" => "patate, olio di semi, sale",
                "price" => 3.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/2498440/pexels-photo-2498440.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Insalata Mista",
                "description" => "Un'insalata fresca con lattuga, pomodorini, cetrioli, carote e un condimento leggero di olio d'oliva e aceto balsamico.",
                "ingredients" => "lattuga, pomodorini, cetrioli, carote, olio d'oliva, aceto balsamico, formaggio",
                "price" => 4.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/1213710/pexels-photo-1213710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
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
                "name" => "Marinara",
                "description" => "Una pizza semplice ma ricca di sapore, con pomodoro, aglio, origano, olio extravergine d'oliva e un tocco di basilico fresco.",
                "ingredients" => "pomodoro, aglio, origano, olio extravergine d'oliva, basilico",
                "price" => 6.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/12891059/pexels-photo-12891059.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Pizza Diavola",
                "description" => "Una pizza piccante con pomodoro, mozzarella, salame piccante, peperoncino e olio d'oliva.",
                "ingredients" => "pomodoro, mozzarella, salame piccante, peperoncino, olio d'oliva",
                "price" => 8.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/3682837/pexels-photo-3682837.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
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
            [
                "name" => "Cotolette alla Milanese",
                "description" => "200g di fette di carne impanate e fritte, croccanti fuori e morbide dentro, un piatto che incarna la tradizione della cucina italiana.",
                "ingredients" => "carne di vitello, pangrattato, uova, olio di semi",
                "price" => 13.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/19999942/pexels-photo-19999942/free-photo-of-pasto-carne-fresco-cestino.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Gamberi alla Griglia",
                "description" => "10 pezzi di Gamberi freschi grigliati, marinati con aglio, limone, olio d'oliva e prezzemolo, serviti con una leggera insalata mista.",
                "ingredients" => "gamberi, aglio, limone, olio d'oliva, prezzemolo, insalata mista",
                "price" => 12.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/20923043/pexels-photo-20923043/free-photo-of-piastre-pasto-tavolo-foglie.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Hamburger Classic",
                "description" => "Un classico hamburger con carne di manzo, formaggio cheddar, lattuga, pomodoro, cipolla e maionese, servito con patatine fritte.",
                "ingredients" => "panino, carne di manzo, cheddar, lattuga, pomodoro, cipolla, maionese, patatine fritte",
                "price" => 9.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/3616956/pexels-photo-3616956.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Bacon Burger",
                "description" => "Un succulento hamburger con carne di manzo, formaggio cheddar, bacon croccante, lattuga, pomodoro e maionese, servito con patatine fritte.",
                "ingredients" => "panino, carne di manzo, cheddar, bacon, lattuga, pomodoro, maionese, patatine fritte",
                "price" => 12.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/11812583/pexels-photo-11812583.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Burger Vegetariano",
                "description" => "Un hamburger vegetariano con un delizioso burger di ceci, lattuga, pomodoro, cipolla rossa e salsa yogurt, servito con patatine fritte.",
                "ingredients" => "panino, burger di ceci, lattuga, pomodoro, cipolla rossa, salsa yogurt, patatine fritte",
                "price" => 9.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/1624473/pexels-photo-1624473.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Hamburger di Pollo",
                "description" => "Un hamburger gustoso con pollo grigliato, lattuga croccante, pomodoro fresco, maionese e salsa barbecue, servito con patatine fritte.",
                "ingredients" => "panino, pollo grigliato, lattuga, pomodoro, maionese, salsa barbecue, patatine fritte",
                "price" => 10.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/5474640/pexels-photo-5474640.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Sushi Misto",
                "description" => "Un assortimento di 15 pezzi di sushi con pesce fresco, riso vinegare, alga nori e un po' di wasabi e salsa di soia per il condimento.",
                "ingredients" => "riso sushi, pesce fresco, alga nori, wasabi, salsa di soia",
                "price" => 15.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/248444/pexels-photo-248444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Tempura di Gamberi",
                "description" => "8 pezzi di Gamberi freschi impanati e fritti in una pastella leggera, serviti con una salsa di soia dolce e accompagnati da verdure fritte.",
                "ingredients" => "gamberi, farina, uova, olio di semi, salsa di soia, verdure miste",
                "price" => 8.80,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/23645834/pexels-photo-23645834/free-photo-of-piastre-fritto-fotografia-di-cibo-frutti-di-mare.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Ramen",
                "description" => "Zuppa di noodle giapponesi servita in un brodo ricco, con carne di maiale, uova sode, cipollotto, germogli di bambù e alghe nori.",
                "ingredients" => "noodles, brodo di carne, maiale, uovo sodo, cipollotto, germogli di bambù, alghe nori",
                "price" => 13.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/2664216/pexels-photo-2664216.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Teriyaki di Pollo",
                "description" => "200g di Pollo grigliato marinato in salsa teriyaki, servito con riso bianco e verdure grigliate.",
                "ingredients" => "pollo, salsa teriyaki, riso bianco, verdure miste",
                "price" => 14.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/15985538/pexels-photo-15985538/free-photo-of-pranzo-pollo-ciotola-natura-morta.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Maki Rolls",
                "description" => "10 pezzi di rotolini di riso sushi con pesce crudo, avocado, cetriolo e alga nori, serviti con salsa di soia e wasabi.",
                "ingredients" => "riso sushi, pesce crudo, avocado, cetriolo, alga nori, salsa di soia, wasabi",
                "price" => 11.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/1893573/pexels-photo-1893573.jpeg"
            ],
            [
                "name" => "Tiramisu",
                "description" => "Il classico dolce italiano, preparato con strati di savoiardi imbevuti nel caffè, crema al mascarpone e una spolverata di cacao.",
                "ingredients" => "savoiardi, mascarpone, caffè, zucchero, uova, cacao",
                "price" => 5.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/26838689/pexels-photo-26838689/free-photo-of-cibo-piastre-cioccolato-dessert.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Panna Cotta",
                "description" => "Un dolce cremoso e delicato, preparato con panna, zucchero e gelatina, servito con salsa ai frutti di bosco.",
                "ingredients" => "panna, zucchero, gelatina, frutti di bosco, vaniglia",
                "price" => 5.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/3301907/pexels-photo-3301907.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Cheesecake alla Fragola",
                "description" => "Una cheesecake cremosa con una base di biscotti sbriciolati, ricoperta con una dolce salsa di fragole fresche.",
                "ingredients" => "biscotti, crema di formaggio, zucchero, fragole, gelatina",
                "price" => 6.00,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/19202780/pexels-photo-19202780/free-photo-of-frutta-dessert-delizioso-fotografia-di-cibo.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                "name" => "Torta al Cioccolato",
                "description" => "Un dolce ricco e goloso, preparato con un impasto al cioccolato fondente, ideale per gli amanti del cioccolato.",
                "ingredients" => "cioccolato fondente, farina, burro, zucchero, uova, lievito",
                "price" => 5.50,
                "visibility" => true,
                "image" => "https://images.pexels.com/photos/1854652/pexels-photo-1854652.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
        ];

        foreach ($plates as $plate){
            $newPlate = Plate::create($plate);
        }
    }
}
