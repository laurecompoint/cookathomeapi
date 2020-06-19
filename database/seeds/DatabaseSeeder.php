<?php

use Illuminate\Database\Seeder;
use App\Recette;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
   
    public function run()
    {
       

        //Boucle de création des faux users
     
            $product = new Recette();
            $product->title = "Cookie";
            $product->photo = "recette1";
            $product->ingredient1 = "20g de chocolat";
            $product->ingredient2 = "125g de buerre";
            $product->ingredient3 = "100g de farine";
            $product->ingredient4 = "1 oeufs";
            $product->ingredient5 = "2 shachet de sucre vannille";
            $product->ingredient6 = "1 shachet de levure";
            $product->preparation1 = "Melanger l'oeuf avec la levure, attender un peu que la levure prenne, puis ajouter le sucre vanillé.";
            $product->preparation2 = "Ajouter la farine à la pate.";
            $product->preparation3 = "Ajouter le beurre a la preparation.";
            $product->preparation4 = "Couper le chocolat en petit moceaux et ajouter dans la préparation.";
            $product->preparation5 = "Faite des petit boule avec la bate puis mettait les dans le four. ";
            $product->cuisson = 15;
            $product->nbpersonne = 3;
            $product->favorie_id = 1;
            $product->type = "dessert";
            $product->save();

            $recette = new Recette();
            $recette->title = "Marbré";
            $recette->photo = "recette2";
            $recette->ingredient1 = "80g de chocolat";
            $recette->ingredient2 = "100g de beurre";
            $recette->ingredient3 = "150 g de farine";
            $recette->ingredient4 = "3 oeufs";
            $recette->ingredient5 = "100g de sucre";
            $recette->ingredient6 = "1 shachet vaniller et levure";
            $recette->preparation1 = "Melanger les oeufs avce la levure et le sucre, puis ajouter la farine";
            $recette->preparation2 = "Faite chauffer le beurre au microonde ou a la casserole. Puis ajouter dans la preparations.";
            $recette->preparation3 = "Couper le chocolat en morceaux et ajouter un peut d'eau avant de le faire fondre au microonde ou a la casserole.";
            $recette->preparation4 = "Ajouter un peut de votre preparation dans le bol de chocolat et remuer.";
            $recette->preparation5 = "Puis sorter un moule, apres l'avoire beurre, ajouter un peut de votre preparation ( pate sans chocolat ) puis ajouter votre preparation avec le chocolat. Puis repeter cette opération plusieur fois jusqu'a ce qu'il vous reste plus de pate. ";
            $recette->cuisson = 40;
            $recette->nbpersonne = 10;
            $recette->favorie_id = 2;
            $recette->type = "dessert";
            $recette->save();

            $recette1 = new Recette();
            $recette1->title = "Chouquette";
            $recette1->photo = "recette3";
            $recette1->ingredient1 = "150g de buerre";
            $recette1->ingredient2 = "Sucre en grain";
            $recette1->ingredient3 = "150g de farine";
            $recette1->ingredient4 = "5 oeufs";
            $recette1->ingredient5 = "10 cl de lait";
            $recette1->ingredient6 = "10 cl d'eau";
            $recette1->preparation1 = "Faite cuire dans une casserole à feu doux, le lait, l'eau et le beurre. Puis ajouter la farine tamisé une fois que le beurre a fondue et que la preparations est à ébulation et remuer rapidement jusqu'a ce que ca prene forme une pâte.";
            $recette1->preparation2 = "Puis remuez cette pâte jusqu'à ce quelle soit bien froide. Vérifiez quelle soit bien froid avec la paume de votre main.";
            $recette1->preparation3 = "Une fois complètement froid, ajouter les 5 œufs bien mélangé petit à petit.  Et remuner la petit à petit jusqu'à ce que ça absorbe les œufs. ";
            $recette1->preparation4 = "Mettez la pâte dans une poche à douille et utiliser la pour mettre la pate sur une plaque de cuisson en les espaçant bien. ";
            $recette1->preparation5 = "Récupérer un jaune d'un œufs et mélanger bien pour mettre ce jaune doeufs sur les choux puis mettez au les choux au fours à 200 degré pendant 20 min puis surveillez la cuisson des chouquettes. Diminuer la température du four si besoins. Une fois cuite sorte du four puis déguster.";
            $recette1->cuisson = 30;
            $recette1->nbpersonne = 10;
            $recette1->favorie_id = 1;
            $recette1->type = "dessert";
            $recette1->save();


            $recettetarte = new Recette();
            $recettetarte->title = "Tarte aux abricot";
            $recettetarte->photo = "tarteabricot";
            $recettetarte->ingredient1 = "40 d'abricot environs";
            $recettetarte->ingredient2 = "100g de sucre";
            $recettetarte->ingredient3 = "Pâte feuilleter";
            $recettetarte->ingredient4 = "";
            $recettetarte->ingredient5 = "";
            $recettetarte->ingredient6 = "";
            $recettetarte->preparation1 = "Mettre la pâte fauilleter dans un plat à tarte.";
            $recettetarte->preparation2 = "Laver, puis couper en deux les abricots en enlevant les noyaux.";
            $recettetarte->preparation3 = "Ajouter les abricots un à un sur la tarte en formant un cercle jusqu'a ce qu'il n'y est plus de place livre sur la tarte.";
            $recettetarte->preparation4 = "Soupoudrer de sucre à votre convenance";
            $recettetarte->preparation5 = "Mettez la tarte aux fours pendant environ 40 min à 190 degré en surveillant bien, puis deguster une fois près.";
            $recettetarte->cuisson = 40;
            $recettetarte->nbpersonne = 7;
            $recettetarte->favorie_id = 1;
            $recettetarte->type = "dessert";
            $recettetarte->save();

            $recettetarte2 = new Recette();
            $recettetarte2->title = "Tarte aux pommes";
            $recettetarte2->photo = "tartepommes";
            $recettetarte2->ingredient1 = "40 pommes environs";
            $recettetarte2->ingredient2 = "100g de sucre";
            $recettetarte2->ingredient3 = "Pâte feuilleter";
            $recettetarte2->ingredient4 = "Eaux";
            $recettetarte2->ingredient5 = "";
            $recettetarte2->ingredient6 = "";
            $recettetarte2->preparation1 = "Mettre la pâte fauilleter dans un plat à tarte.";
            $recettetarte2->preparation2 = "Laver, puis couper et éplucher en quatre les pommes, couper une partie en rondel et l'aure en petit morceaux pour la compote.";
            $recettetarte2->preparation3 = "Mettez à cuire la compote avec de l'eau dans une casserole.";
            $recettetarte2->preparation4 = "Etaler cette compote sur la tarte puis ajouter les rondelles de pommes en cercle.";
            $recettetarte2->preparation5 = "Mettez la tarte aux fours pendant environ 40 min à 190 degré en surveillant bien, puis deguster une fois près.";
            $recettetarte2->cuisson = 40;
            $recettetarte2->nbpersonne = 7;
            $recettetarte2->favorie_id = 0;
            $recettetarte2->type = "dessert";
            $recettetarte2->save();

            $recettecrepechantilly = new Recette();
            $recettecrepechantilly->title = "Gateaux aux crépes";
            $recettecrepechantilly->photo = "crepechantilly";
            $recettecrepechantilly->ingredient1 = "30 cl de crème fleurette";
            $recettecrepechantilly->ingredient2 = "5 sachet de sucre vanillée";
            $recettecrepechantilly->ingredient3 = "Crépes toute faites en sachet";
            $recettecrepechantilly->ingredient4 = "Fraise";
            $recettecrepechantilly->ingredient5 = "Framboise";
            $recettecrepechantilly->ingredient6 = "Autre fruit de votre choix...";
            $recettecrepechantilly->preparation1 = "Faire la chantilly maison, en mélangant avec le batteurs la creme fleurette, puis ajouter une fois bien pris, le sucre vanillée.";
            $recettecrepechantilly->preparation2 = "Prener un moule rond sur les cotés pour tenir le gateaux de crêpes.";
            $recettecrepechantilly->preparation3 = "Puis ajouter quelque crêpes dans le fond du moule, puis ajouter des fruits, puis ensuite de la chantilly.";
            $recettecrepechantilly->preparation4 = "Recommencer plusieur fois cette opérations jusqu'a ce que il n'y est plus de chantilly. Puis fermer le gateaux avec des crêpes.";
            $recettecrepechantilly->preparation5 = "Réserver aux frais, puis deguster ce gateaux en le démoulant délicatement.";
            $recettecrepechantilly->cuisson = 0;
            $recettecrepechantilly->nbpersonne = 10;
            $recettecrepechantilly->favorie_id = 0;
            $recettecrepechantilly->type = "dessert";
            $recettecrepechantilly->save();

            $recetteplat = new Recette();
            $recetteplat->title = "Paella";
            $recetteplat->photo = "recetteplat1";
            $recetteplat->ingredient1 = "Moule, crevettes, gambas, lote, calamars";
            $recetteplat->ingredient2 = "Tomate et oignon";
            $recetteplat->ingredient3 = "Riz";
            $recetteplat->ingredient4 = "Eau";
            $recetteplat->ingredient5 = "Épice : poivre, sel,curcuma ";
            $recetteplat->ingredient6 = "10 cl d'eau";
            $recetteplat->preparation1 = "Préparer une sauces tomates avec des oignons et les faire rissoler. mixer bien les oignons.";
            $recetteplat->preparation2 = "Cuire les calamars, ouvrir les moules et les mettre de côté.";
            $recetteplat->preparation3 = "Disposer sur le plat à paella, les calamars et la sauce tomates et des petits morceaux de lot répartie, puis le riz crus. Disposé ensuite les gambas et les crevettes de façon harmonieux.";
            $recetteplat->preparation4 = "Puis cuire à part un bouillon, puis mettre la paella sur le feux, mettre le bouillon chaud dans la paella.";
            $recetteplat->preparation5 = "Ecraser de l'aile et du persil et le mettre dans la paella avec les épices en plus puis remuer pendant que ca cuit. Surveille la cuisson et deguster quand c'est près.";
            $recetteplat->cuisson = 15;
            $recetteplat->nbpersonne = 10;
            $recetteplat->favorie_id = 1;
            $recetteplat->type = "plats";
            $recetteplat->save();

            $recetteplat2 = new Recette();
            $recetteplat2->title = "Humberger Maison";
            $recetteplat2->photo = "humberger";
            $recetteplat2->ingredient1 = "1 paim humberger";
            $recetteplat2->ingredient2 = "2 tranche de bacon";
            $recetteplat2->ingredient3 = "2 tranche de fromage";
            $recetteplat2->ingredient4 = "1 steak";
            $recetteplat2->ingredient5 = "Salade";
            $recetteplat2->ingredient6 = "Tomates";
            $recetteplat2->preparation1 = "Faite cuire le steak à la poile avec le bacon";
            $recetteplat2->preparation2 = "Dispocer l'humberger couper en deux dans une assiete";
            $recetteplat2->preparation3 = "Puis ajouter la tranche de fromage, puis celle de bacon.";
            $recetteplat2->preparation4 = "Ensuite ajouter le steak, puis rajouter l'autre tranche de bacon et de fromage.";
            $recetteplat2->preparation5 = "Mettez au four à 200 degré, pendants 40 min puis server et deguster.";
            $recetteplat2->cuisson = 40;
            $recetteplat2->nbpersonne = 1;
            $recetteplat2->favorie_id = 0;
            $recetteplat2->type = "plats";
            $recetteplat2->save();

            $recetteapero = new Recette();
            $recetteapero->title = "Mini pizza";
            $recetteapero->photo = "recetteapero1";
            $recetteapero->ingredient1 = "1 pâte à pizza";
            $recetteapero->ingredient2 = "Olives";
            $recetteapero->ingredient3 = "Jambon";
            $recetteapero->ingredient4 = "Chorizo";
            $recetteapero->ingredient5 = "Sauce tomates";
            $recetteapero->ingredient6 = "Gruyere";
            $recetteapero->preparation1 = "Faire là pâte à pizza, avec la preparation de la pâte.";
            $recetteapero->preparation2 = "Ajouter la sauce tomate sur les pates a pizza.";
            $recetteapero->preparation3 = "Puis ajouter le jambon et le chorizo.";
            $recetteapero->preparation4 = "Ensuite rajouter les olives et le gruyère.";
            $recetteapero->preparation5 = "Puis enfourner au fours pendants 40 min à 200 degré, puis deguster une fois près.";
            $recetteapero->cuisson = 40;
            $recetteapero->nbpersonne = 8;
            $recetteapero->favorie_id = 0;
            $recetteapero->type = "apero";
            $recetteapero->save();

            $recetteapero2 = new Recette();
            $recetteapero2->title = "Citrouille chévres";
            $recetteapero2->photo = "citrouillechevre";
            $recetteapero2->ingredient1 = "2 pâte à feuillete";
            $recetteapero2->ingredient2 = "1 rouleau de chèvre";
            $recetteapero2->ingredient3 = "Des noix";
            $recetteapero2->ingredient4 = "2 cuillère de miel";
            $recetteapero2->ingredient5 = "1 jaune d'oeuf";
            $recetteapero2->ingredient6 = "";
            $recetteapero2->preparation1 = "Sorter et ouvrer une pâte feuillete puis mettez le chèvres puis les noix dessus.";
            $recetteapero2->preparation2 = "Puis mettez par dessus la deuxieme pâte feuillete, et fermer bien les bort.";
            $recetteapero2->preparation3 = "Dessiner ensuite par dessus avec un couteau, une forme de citrouille";
            $recetteapero2->preparation4 = "Ajouter le jaune d'oeufs pour que se doit dorrer une fois pres.";
            $recetteapero2->preparation5 = "Puis enfourner au fours pendants 40 min à 200 degré, puis deguster une fois près.";
            $recetteapero2->cuisson = 40;
            $recetteapero2->nbpersonne = 8;
            $recetteapero2->favorie_id = 0;
            $recetteapero2->type = "apero";
            $recetteapero2->save();

            $recetteentree = new Recette();
            $recetteentree->title = "Quiche aux thon";
            $recetteentree->photo = "recetteentree1";
            $recetteentree->ingredient1 = "2 poite de thon naturel";
            $recetteentree->ingredient2 = "Pâte brisé";
            $recetteentree->ingredient3 = "5 cuilere de moutarde";
            $recetteentree->ingredient4 = "3 oeufs";
            $recetteentree->ingredient5 = "5 cuilere de crème fraiche";
            $recetteentree->ingredient6 = "10 cl de lait";
            $recetteentree->preparation1 = "Mettre la pâte brisé dans un plat à tarte, puis étaler la moutarde par dessus, puis ajouter le thon apres l'avoir émietter.";
            $recetteentree->preparation2 = "Dans un bol a part, mélanger les oeufs puis ajouter la crème et le lait puis ajoutez un peu de poivres.";
            $recetteentree->preparation3 = "Videz cette préparation sur la pâte, puis répartiser la sur la pâte.";
            $recetteentree->preparation4 = "Puis ajouter la sauce tomate en mélangant bien";
            $recetteentree->preparation5 = "Enforner dans le fours à 180 degré pendant 60 min, puis deguster une fois cuit. ( dégustation  chaud ou froid )";
            $recetteentree->cuisson = 60;
            $recetteentree->nbpersonne = 8;
            $recetteentree->favorie_id = 0;
            $recetteentree->type = "entree";
            $recetteentree->save();

            $recetteentree2 = new Recette();
            $recetteentree2->title = "Cake salé";
            $recetteentree2->photo = "cake";
            $recetteentree2->ingredient1 = "30 cl de lait";
            $recetteentree2->ingredient2 = "Olives";
            $recetteentree2->ingredient3 = "Lardon";
            $recetteentree2->ingredient4 = "3 oeufs";
            $recetteentree2->ingredient5 = "100g de cuyere";
            $recetteentree2->ingredient6 = "10 cl de lait";
            $recetteentree2->preparation1 = "Mélanger les oeufs, le cruyère, les olives, et les lardon.";
            $recetteentree2->preparation2 = "Ajouter le poivre dans la préparations.";
            $recetteentree2->preparation3 = "Puis ajouter le lait dans la pâte.";
            $recetteentree2->preparation4 = "Mettre la préparation, dans un moule.";
            $recetteentree2->preparation5 = "Enfourner dans le four pendant 60 min à 180 degré. Puis déguster.";
            $recetteentree2->cuisson = 60;
            $recetteentree2->nbpersonne = 8;
            $recetteentree2->favorie_id = 0;
            $recetteentree2->type = "entree";
            $recetteentree2->save();






          
       
       
    }
}
