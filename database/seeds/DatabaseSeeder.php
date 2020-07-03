<?php

use Illuminate\Database\Seeder;
use App\Recette;
use App\Commentaire;
use App\Recette_user;
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
     
            $recettes = new Recette();
            $recettes->title = "Cookies";
            $recettes->photo = "cookie";
            $recettes->ingredient1 = "20g de chocolat";
            $recettes->ingredient2 = "125g de beurre";
            $recettes->ingredient3 = "100g de farine";
            $recettes->ingredient4 = "1 œuf";
            $recettes->ingredient5 = "2 sachets de sucre vanillé";
            $recettes->ingredient6 = "1 sachet de levure";
            $recettes->preparation1 = "Mélanger l'œuf avec la levure, attendez un peu que la levure prenne, puis ajouter le sucre vanillé.";
            $recettes->preparation2 = "Ajouter la farine à la pâte.";
            $recettes->preparation3 = "Ajouter le beurre a la preparation.";
            $recettes->preparation4 = "Couper le chocolat en petits morceaux et ajouter dans la préparation.";
            $recettes->preparation5 = "Faite des petites boules avec la pâte puis mettait les dans le four. ";
            $recettes->cuisson = 15;
            $recettes->nbpersonne = 3;
            $recettes->user_id = 1;
            $recettes->type = "dessert";
            $recettes->materiel = "Vous aurez besoin d'un saladier, une cuillère, un couteaux et un bol pour faire fondre le beurre au micro-ondes.";
            $recettes->save();

            $recette = new Recette();
            $recette->title = "Marbré";
            $recette->photo = "marbre";
            $recette->ingredient1 = "80g de chocolat";
            $recette->ingredient2 = "100g de beurre";
            $recette->ingredient3 = "150 g de farine";
            $recette->ingredient4 = "3 œufs";
            $recette->ingredient5 = "100g de sucre";
            $recette->ingredient6 = "1 sachet vanillé et levure";
            $recette->preparation1 = "Mélanger les oeufs avec la levure et le sucre, puis ajouter la farine";
            $recette->preparation2 = "Faite chauffer le beurre au micro-ondes ou à la casserole. Puis ajouter dans la préparation.";
            $recette->preparation3 = "Couper le chocolat en morceaux et ajouter un peu d'eau avant de le faire fondre au micro-ondes ou à la casserole.";
            $recette->preparation4 = "Ajouter un peu de votre préparation dans le bol de chocolat et remuer.";
            $recette->preparation5 = "Puis sortez un moule, après l'avoir beurré, ajouter un peu de votre préparation (pâte sans chocolat) puis ajouter votre préparation avec le chocolat. Puis répéter cette opération plusieurs fois jusqu'à ce qu'il ne vous reste plus de pâte. ";
            $recette->cuisson = 40;
            $recette->nbpersonne = 10;
            $recette->user_id = 2;
            $recette->type = "dessert";
            $recette->materiel = "Vous aurez besoin d'un saladier, une cuillère, un couteaux et un bol pour faire fondre le beurre au micro-ondes.";
            $recette->save();

            $recette1 = new Recette();
            $recette1->title = "Chouquette";
            $recette1->photo = "chouquette";
            $recette1->ingredient1 = "150g de beurre";
            $recette1->ingredient2 = "Sucre en grain";
            $recette1->ingredient3 = "150g de farine";
            $recette1->ingredient4 = "5 œufs";
            $recette1->ingredient5 = "10 cl de lait";
            $recette1->ingredient6 = "10 cl d'eau";
            $recette1->preparation1 = "Faite cuire dans une casserole à feu doux, le lait, l'eau et le beurre. Puis ajouter la farine tamisé une fois que le beurre à fondue et que la préparation est à ébullition et remuer rapidement jusqu'à ce que ça prenne forme une pâte.";
            $recette1->preparation2 = "Puis remuez cette pâte jusqu'à ce qu’elle soit bien froide. Vérifiez qu’elle soit bien froide avec la paume de votre main.";
            $recette1->preparation3 = "Une fois complètement froid, ajouter les 5 œufs bien mélangés petit à petit.  Et remuer la petit à petit jusqu'à ce que ça absorbe les œufs. ";
            $recette1->preparation4 = "Mettez la pâte dans une poche à douille et utiliser la pour mettre la pâte sur une plaque de cuisson en les espaçant bien. ";
            $recette1->preparation5 = "Récupérer un jaune d’un œuf et mélanger bien pour mettre ce jaune d’œuf sur les choux puis mettez au les choux au fours à 200 degrés pendant 20 min puis surveillez la cuisson des chouquettes. Diminuer la température du four si besoin. Une fois cuites sortez du four puis déguster.";
            $recette1->cuisson = 30;
            $recette1->nbpersonne = 10;
            $recette1->user_id = 1;
            $recette1->type = "dessert";
            $recette1->materiel = "Vous aurez besoin d'un saladier, une cuillère, un couteaux, une poche à douille et une casserole.";
            $recette1->save();


            $recettetarte = new Recette();
            $recettetarte->title = "Tarte aux abricots";
            $recettetarte->photo = "tarteabricot";
            $recettetarte->ingredient1 = "40 abricots environ";
            $recettetarte->ingredient2 = "100g de sucre";
            $recettetarte->ingredient3 = "Pâte feuilletée";
            $recettetarte->ingredient4 = "";
            $recettetarte->ingredient5 = "";
            $recettetarte->ingredient6 = "";
            $recettetarte->preparation1 = "Mettre la pâte feuilletée dans un plat à tarte.";
            $recettetarte->preparation2 = "Laver, puis couper en deux les abricots en enlevant les noyaux.";
            $recettetarte->preparation3 = "Ajouter les abricots un à un sur la tarte en formant un cercle jusqu'à ce qu'il n'y ait plus de place livre sur la tarte.";
            $recettetarte->preparation4 = "Soupoudrer de sucre à votre convenance";
            $recettetarte->preparation5 = "Mettez la tarte au four pendant environ 40 min à 190 degrés en surveillant bien, puis déguster une fois près.";
            $recettetarte->cuisson = 40;
            $recettetarte->nbpersonne = 7;
            $recettetarte->user_id = 1;
            $recettetarte->type = "dessert";
            $recettetarte->materiel = "Vous aurez besoin une cuillère, un couteaux, et un plat à tarte.";
            $recettetarte->save();

            $recettetarte2 = new Recette();
            $recettetarte2->title = "Tarte aux pommes";
            $recettetarte2->photo = "tartepomme";
            $recettetarte2->ingredient1 = "40 pommes environs";
            $recettetarte2->ingredient2 = "100g de sucre";
            $recettetarte2->ingredient3 = "Pâte feuilletée";
            $recettetarte2->ingredient4 = "Eau";
            $recettetarte2->ingredient5 = "";
            $recettetarte2->ingredient6 = "";
            $recettetarte2->preparation1 = "Mettre la pâte feuilletée dans un plat à tarte.";
            $recettetarte2->preparation2 = "Laver, puis couper et éplucher en quatre les pommes, couper une partie en rondelles et l'autre en petits morceaux pour la compote.";
            $recettetarte2->preparation3 = "Mettez à cuire la compote avec de l'eau dans une casserole.";
            $recettetarte2->preparation4 = "Etaler cette compote sur la tarte puis ajouter les rondelles de pommes en cercle.";
            $recettetarte2->preparation5 = "Mettez la tarte au four pendant environ 40 min à 190 degréss en surveillant bien, puis déguster une fois prêt.";
            $recettetarte2->cuisson = 40;
            $recettetarte2->nbpersonne = 7;
            $recettetarte2->user_id = 2;
            $recettetarte2->type = "dessert";
            $recettetarte2->materiel = "Vous aurez besoin d'un saladier, une cuillère, un couteaux, un plat à tarte et une casserole.";
            $recettetarte2->save();

            $recettetarte3 = new Recette();
            $recettetarte3->title = "Tarte aux fraise";
            $recettetarte3->photo = "tartefraise";
            $recettetarte3->ingredient1 = "500g de fraise";
            $recettetarte3->ingredient2 = "Crème pâtissière";
            $recettetarte3->ingredient3 = "Pâte sablée";
            $recettetarte3->ingredient4 = "";
            $recettetarte3->ingredient5 = "";
            $recettetarte3->ingredient6 = "";
            $recettetarte3->preparation1 = "Mettre la pâte feuilletée dans un plat à tarte.";
            $recettetarte3->preparation2 = "Faire la crème pâtissière.";
            $recettetarte3->preparation3 = "Ajouter la crème pâtissière sur la pâte sablée.";
            $recettetarte3->preparation4 = "Couper puis ajouter les fraises par dessus la crème.";
            $recettetarte3->preparation5 = "Reserver au frais avant de servire.";
            $recettetarte3->cuisson = 40;
            $recettetarte3->nbpersonne = 7;
            $recettetarte3->user_id = 2;
            $recettetarte3->type = "dessert";
            $recettetarte3->materiel = "Vous aurez besoin d'un saladier, une cuillère, un couteaux, un plat à tarte et une casserole.";
            $recettetarte3->save();


            $recettecrepechantilly = new Recette();
            $recettecrepechantilly->title = "Gateau aux crêpes";
            $recettecrepechantilly->photo = "crepechantilly";
            $recettecrepechantilly->ingredient1 = "30 cl de crème fleurette";
            $recettecrepechantilly->ingredient2 = "5 sachets de sucre vanillé";
            $recettecrepechantilly->ingredient3 = "Crêpes toutes faites en sachet";
            $recettecrepechantilly->ingredient4 = "Fraise";
            $recettecrepechantilly->ingredient5 = "Framboise";
            $recettecrepechantilly->ingredient6 = "Autre fruit de votre choix...";
            $recettecrepechantilly->preparation1 = "Faire la chantilly maison, en mélangeant avec le batteurs la creme fleurette, puis ajouter une fois bien pris, le sucre vanillé.";
            $recettecrepechantilly->preparation2 = "Prenez un moule rond sur les côtés pour tenir le gâteau de crêpes.";
            $recettecrepechantilly->preparation3 = "Puis ajouter quelque crêpes dans le fond du moule, puis ajouter des fruits, puis ensuite de la chantilly.";
            $recettecrepechantilly->preparation4 = "Recommencer plusieur fois cette opérations jusqu'à ce que il n'y ait plus de chantilly. Puis fermer le gâteau avec des crêpes.";
            $recettecrepechantilly->preparation5 = "Réserver aux frais, puis déguster ce gâteau en le démoulant délicatement.";
            $recettecrepechantilly->cuisson = 0;
            $recettecrepechantilly->nbpersonne = 10;
            $recettecrepechantilly->user_id = 2;
            $recettecrepechantilly->type = "dessert";
            $recettecrepechantilly->materiel = "Vous aurez besoin d'un saladier, une cuillère et un bateur.";
            $recettecrepechantilly->save();

            $recettecrepechantilly2 = new Recette();
            $recettecrepechantilly2->title = "Clafoutis";
            $recettecrepechantilly2->photo = "clafoutis";
            $recettecrepechantilly2->ingredient1 = "600g de cerises";
            $recettecrepechantilly2->ingredient2 = "2 sachet de sucre vanillé";
            $recettecrepechantilly2->ingredient3 = "40g de beurre";
            $recettecrepechantilly2->ingredient4 = "4 œufs";
            $recettecrepechantilly2->ingredient5 = "10cl de lait";
            $recettecrepechantilly2->ingredient6 = "100g de farine";
            $recettecrepechantilly2->preparation1 = "Laver les cerises et enlever les noyaux et les mettre dans un plats à four.";
            $recettecrepechantilly2->preparation2 = "Mélanger la farine et le sucre puis ajouter les œufs petit à petit.";
            $recettecrepechantilly2->preparation3 = "Ajouter le beurre fondu à la préparation et mélanger bien";
            $recettecrepechantilly2->preparation4 = "Ajouter le lait puis ajouter les cerises.";
            $recettecrepechantilly2->preparation5 = "Mettez la préparation dans un plats puis mettez le dans le four. Puis dégustez une fois près.";
            $recettecrepechantilly2->cuisson = 40;
            $recettecrepechantilly2->nbpersonne = 8;
            $recettecrepechantilly2->user_id = 2;
            $recettecrepechantilly2->type = "dessert";
            $recettecrepechantilly2->materiel = "Vous aurez besoin d'un saladier, une cuillère, un plats, et une casserole.";
            $recettecrepechantilly2->save();

            $recettecrepechantilly1 = new Recette();
            $recettecrepechantilly1->title = "Crumble cerises";
            $recettecrepechantilly1->photo = "crumble";
            $recettecrepechantilly1->ingredient1 = "100g de cerises";
            $recettecrepechantilly1->ingredient2 = "1 sachet de sucre vanillé";
            $recettecrepechantilly1->ingredient3 = "20g de beurre";
            $recettecrepechantilly1->ingredient4 = "100g de farine";
            $recettecrepechantilly1->ingredient5 = "";
            $recettecrepechantilly1->ingredient6 = "";
            $recettecrepechantilly1->preparation1 = "Laver les cerises et enlever les noyaux et les mettre dans un plat au four.";
            $recettecrepechantilly1->preparation2 = "Faire fondre le beurre.";
            $recettecrepechantilly1->preparation3 = "Mélanger la farine et le beurre fondu jusqu'à obtenir une pâte .";
            $recettecrepechantilly1->preparation4 = "Ajouter cette pâte sur les cerises.";
            $recettecrepechantilly1->preparation5 = "Mettez au fours à 180 degréss, puis déguster une fois près.";
            $recettecrepechantilly1->cuisson = 40;
            $recettecrepechantilly1->nbpersonne = 4;
            $recettecrepechantilly1->user_id = 3;
            $recettecrepechantilly1->type = "dessert";
            $recettecrepechantilly1->materiel = "Vous aurez besoin d'un bol, une cuillère, un couteaux et un plats.";
            $recettecrepechantilly1->save();


            $recetteplat = new Recette();
            $recetteplat->title = "Paella";
            $recetteplat->photo = "paella";
            $recetteplat->ingredient1 = "Moule, crevettes, gambas, lote, calamars";
            $recetteplat->ingredient2 = "Tomate et oignon";
            $recetteplat->ingredient3 = "Riz";
            $recetteplat->ingredient4 = "Eau";
            $recetteplat->ingredient5 = "Épice : poivre, sel, curcuma ";
            $recetteplat->ingredient6 = "10 cl d'eau";
            $recetteplat->preparation1 = "Préparer une sauce tomate avec des oignons et les faire rissoler. Mixer bien les oignons.";
            $recetteplat->preparation2 = "Cuire les calamars, ouvrir les moules et les mettre de côté.";
            $recetteplat->preparation3 = "Disposer sur le plat à paella, les calamars et la sauce tomates et des petits morceaux de lot répartie, puis le riz crus. Disposez ensuite les gambas et les crevettes de façon harmonieuse.";
            $recetteplat->preparation4 = "Puis cuire à part un bouillon, puis mettre la paella sur le feux, mettre le bouillon chaud dans la paella.";
            $recetteplat->preparation5 = "Ecraser de l'aile et du persil et le mettre dans la paella avec les épices en plus puis remuer pendant que ça cuit. Surveille la cuisson et déguster quand c'est près.";
            $recetteplat->cuisson = 15;
            $recetteplat->nbpersonne = 10;
            $recetteplat->user_id = 1;
            $recetteplat->type = "plats";
            $recetteplat->materiel = "Vous aurez besoin d'un saladier, une cuillère, un couteaux, une plaque de cuisson feu de bois et une casserole.";
            $recetteplat->save();

            $recetteplat2 = new Recette();
            $recetteplat2->title = "Hamburger Maison";
            $recetteplat2->photo = "hamburger";
            $recetteplat2->ingredient1 = "1 pain hamburger";
            $recetteplat2->ingredient2 = "2 tranches de bacon";
            $recetteplat2->ingredient3 = "2 tranches de fromage";
            $recetteplat2->ingredient4 = "1 steak";
            $recetteplat2->ingredient5 = "Salade";
            $recetteplat2->ingredient6 = "Tomates";
            $recetteplat2->preparation1 = "Faite cuire le steak à la poêle avec le bacon";
            $recetteplat2->preparation2 = "Disposer le hamburger couper en deux dans une assiette";
            $recetteplat2->preparation3 = "Puis ajouter la tranche de fromage, puis celle de bacon.";
            $recetteplat2->preparation4 = "Ensuite ajouter le steak, puis rajouter l'autre tranche de bacon et de fromage.";
            $recetteplat2->preparation5 = "Mettez au four à 200 degréss, pendant 40 min puis server et déguster.";
            $recetteplat2->cuisson = 40;
            $recetteplat2->nbpersonne = 1;
            $recetteplat2->user_id = 2;
            $recetteplat2->type = "plats";
            $recetteplat2->materiel = "Vous aurez besoin d'une assiette, une poêle, une cuillère et un four.";
            $recetteplat2->save();

            $recetteplat3 = new Recette();
            $recetteplat3->title = "Poisson";
            $recetteplat3->photo = "poisson";
            $recetteplat3->ingredient1 = "1 poisson panné";
            $recetteplat3->ingredient2 = "1 boite de haricots verts";
            $recetteplat3->ingredient3 = "Poivre";
            $recetteplat3->ingredient4 = "Huile d'olive";
            $recetteplat3->ingredient5 = "";
            $recetteplat3->ingredient6 = "";
            $recetteplat3->preparation1 = "Faite cuire le poisson sur une poêle avec de l'huile d'olive";
            $recetteplat3->preparation2 = "Pendant dans une autre poêle, faites cuire les haricots verts.";
            $recetteplat3->preparation3 = "Surveillez la cuisson des deux, remuer souvent le poisson et les haricots.";
            $recetteplat3->preparation4 = "Ajouter du poivres sur les haricot vert selon votre convenance.";
            $recetteplat3->preparation5 = "Puis une fois près, server le poisson dans une assiette avec les haricots et déguster.";
            $recetteplat3->cuisson = 20;
            $recetteplat3->nbpersonne = 1;
            $recetteplat3->user_id = 2;
            $recetteplat3->type = "plats";
            $recetteplat3->materiel = "Vous aurez besoin d'une poile, une fourchette et une cuillère.";
            $recetteplat3->save();

            $recetteplat4 = new Recette();
            $recetteplat4->title = "Betrave farcie";
            $recetteplat4->photo = "betrave";
            $recetteplat4->ingredient1 = "1 betterave";
            $recetteplat4->ingredient2 = "Maïs";
            $recetteplat4->ingredient3 = "Concombre";
            $recetteplat4->ingredient4 = "Avocats";
            $recetteplat4->ingredient5 = "Crevettes";
            $recetteplat4->ingredient6 = "Autres légumes (au choix )";
            $recetteplat4->preparation1 = "Couper en tranche très fine une betterave, 
            puis découper à l'aide d'un emporte-pièce, 2 tranches pour les placer dans  le fond et sur le couvercle ";
            $recetteplat4->preparation2 = "Recouper d'autre fine tranches pour faire le contour.";
            $recetteplat4->preparation3 = "Appliquer au fond de l’emporte-pièce la première couche de betterave puis les contours.";
            $recetteplat4->preparation4 = "Farcir avec les légumes coupés en cubes. Refermer avec le couvercle 
            Décorer le dessus suivant ses envies.";
            $recetteplat4->preparation5 = "Déposer 6 crevettes en pétale de fleur autour 
            Agrémenter d’une mayonnaise si besoin.";
            $recetteplat4->cuisson = 0;
            $recetteplat4->nbpersonne = 1;
            $recetteplat4->user_id = 3;
            $recetteplat4->type = "plats";
            $recetteplat4->materiel = "Vous aurez besoin d'un emporte-pièce, un couteau, une fourchette et une cuillère.";
            $recetteplat4->save();

            $recetteplat5 = new Recette();
            $recetteplat5->title = "Carrote farcie";
            $recetteplat5->photo = "carrotte";
            $recetteplat5->ingredient1 = "2 carottes";
            $recetteplat5->ingredient2 = "1/2 paquet de lardons ";
            $recetteplat5->ingredient3 = "2 cuillères à café de parmesan";
            $recetteplat5->ingredient4 = "1 jaune d’œuf poché";
            $recetteplat5->ingredient5 = "2 cuillères à soupe de lait de coco ";
            $recetteplat5->ingredient6 = "Epices : poivre et sel";
            $recetteplat5->preparation1 = "Appliquer le mélange carottes coco lardons dans un emporte-pièce cyclone tique.";
            $recetteplat5->preparation2 = "Puis déposer l’œuf poché par dessus.";
            $recetteplat5->preparation3 = "Parsemer par dessus l'œuf, le parmesan .";
            $recetteplat5->preparation4 = "Salée poivrer à votre convenance.";
            $recetteplat5->preparation5 = "Retirer l’emporte pièce.";
            $recetteplat5->cuisson = 0;
            $recetteplat5->nbpersonne = 1;
            $recetteplat5->user_id = 3;
            $recetteplat5->type = "plats";
            $recetteplat5->materiel = "Vous aurez besoin d'un emporte pièce, un couteau, une cuillère.";
            $recetteplat5->save();

            $recetteplat6 = new Recette();
            $recetteplat6->title = "Tarte au chèvre";
            $recetteplat6->photo = "tartechevre";
            $recetteplat6->ingredient1 = "Pâte brisée";
            $recetteplat6->ingredient2 = "2 oeufs";
            $recetteplat6->ingredient3 = "Chèvre";
            $recetteplat6->ingredient4 = "Crème";
            $recetteplat6->ingredient5 = "Lait";
            $recetteplat6->ingredient6 = "Poivres";
            $recetteplat6->preparation1 = "Placer la pâte brisée dans un plat à tarte.";
            $recetteplat6->preparation2 = "Faire la preparation dans un bol, mélanger la crème, le lait et les oeufs.";
            $recetteplat6->preparation3 = "Ajouter un peut de poivres dans la préparation.";
            $recetteplat6->preparation4 = "Puis couper le chèvres en petit morceaux et ajouter le à la préparation.";
            $recetteplat6->preparation5 = "Ajouter cette préparation dans le fours pendant 50 min à 190 degré.";
            $recetteplat6->cuisson = 30;
            $recetteplat6->nbpersonne = 2;
            $recetteplat6->user_id = 3;
            $recetteplat6->type = "plats";
            $recetteplat6->materiel = "Vous aurez besoin d'un plat à tarte et  d'un saladier.";
            $recetteplat6->save();

            $recetteplat7 = new Recette();
            $recetteplat7->title = "Saumon-brogolie";
            $recetteplat7->photo = "saumonbrogolie";
            $recetteplat7->ingredient1 = "Brogolie";
            $recetteplat7->ingredient2 = "1 pomme de terre";
            $recetteplat7->ingredient3 = "2 patate douce";
            $recetteplat7->ingredient4 = "50cl de lait";
            $recetteplat7->ingredient5 = "Saumon";
            $recetteplat7->ingredient6 = "Poivres et sel";
            $recetteplat7->preparation1 = "Cuire le saumon dans une poele avec de l'huile d'olive.";
            $recetteplat7->preparation2 = "Faire cuire le brocolie dans une caserole avec de l'eau pendant 10 min";
            $recetteplat7->preparation3 = "Faire la purée en ecrassant les patates douce et la pommes de terres, puis ajouter le lait et continuer à mélanger pour que la purée soit liquide.";
            $recetteplat7->preparation4 = "Disposer dans des assietes le brogolie, un peu de purée puis le saumon.";
            $recetteplat7->preparation5 = "Noublier pas d'asaisonner à votre convenance avec poivre et sel. Puis déguster.";
            $recetteplat7->cuisson = 30;
            $recetteplat7->nbpersonne = 3;
            $recetteplat7->user_id = 3;
            $recetteplat7->type = "plats";
            $recetteplat7->materiel = "Vous aurez besoin d'une poele, une caserole, une cuilère et d'un saladier.";
            $recetteplat7->save();


            $recetteapero = new Recette();
            $recetteapero->title = "Pizza";
            $recetteapero->photo = "pizza";
            $recetteapero->ingredient1 = "1 pâte à pizza";
            $recetteapero->ingredient2 = "Olives";
            $recetteapero->ingredient3 = "Jambon";
            $recetteapero->ingredient4 = "Chorizo";
            $recetteapero->ingredient5 = "Sauce tomate";
            $recetteapero->ingredient6 = "Gruyère";
            $recetteapero->preparation1 = "Faire là pâte à pizza, avec la préparation de la pâte.";
            $recetteapero->preparation2 = "Ajouter la sauce tomate sur les pates a pizza.";
            $recetteapero->preparation3 = "Puis ajouter le jambon et le chorizo.";
            $recetteapero->preparation4 = "Ensuite rajouter les olives et le gruyère.";
            $recetteapero->preparation5 = "Puis enfourner au fours pendants 40 min à 200 degrés, puis déguster une fois près.";
            $recetteapero->cuisson = 40;
            $recetteapero->nbpersonne = 8;
            $recetteapero->user_id = 3;
            $recetteapero->type = "apero";
            $recetteapero->materiel = "Vous aurez besoin d'un saladier, une cuillère, un couteaux et un doseur.";
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
            $recetteapero2->preparation5 = "Puis enfourner au fours pendants 40 min à 200 degrés, puis déguster une fois près.";
            $recetteapero2->cuisson = 40;
            $recetteapero2->nbpersonne = 8;
            $recetteapero2->user_id = 3;
            $recetteapero2->type = "apero";
            $recetteapero2->materiel = "Vous aurez besoin d'un couteaux et une cuillère.";
            $recetteapero2->save();

            $recetteapero2 = new Recette();
            $recetteapero2->title = "Faritas";
            $recetteapero2->photo = "faritas";
            $recetteapero2->ingredient1 = "5 faritas";
            $recetteapero2->ingredient2 = "Viandes hachés";
            $recetteapero2->ingredient3 = "Sauce tomate";
            $recetteapero2->ingredient4 = "Haricot rouge";
            $recetteapero2->ingredient5 = "Guacamole";
            $recetteapero2->ingredient6 = "Cruyère";
            $recetteapero2->preparation1 = "Faire cuire la viandes hachés dans une poiles, puis ajouter les harocots rouges.";
            $recetteapero2->preparation2 = "Quand la viande est cuite, ajouter la sauce tomate et remuer jusqu'a ce que la sauce impregne la vidande.";
            $recetteapero2->preparation3 = "Preparer le guacamole et le cruyère.";
            $recetteapero2->preparation4 = "Faite chauffer les faritas aux micro onde.";
            $recetteapero2->preparation5 = "Ajouter le mélange viande, haricots rouge et sauce tomate dans les farites, puis ajouter le guacamole puis le cruyère. Ensuite déguster pendant que c'est encore chaud.";
            $recetteapero2->cuisson = 30;
            $recetteapero2->nbpersonne = 5;
            $recetteapero2->user_id = 3;
            $recetteapero2->type = "apero";
            $recetteapero2->materiel = "Vous aurez besoin d'une poile et une cuillère.";
            $recetteapero2->save();


            $recetteentree = new Recette();
            $recetteentree->title = "Quiche aux thon";
            $recetteentree->photo = "quichethon";
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
            $recetteentree->preparation5 = "Enforner dans le fours à 180 degrés pendant 60 min, puis déguster une fois cuit. ( dégustation  chaud ou froid )";
            $recetteentree->cuisson = 60;
            $recetteentree->nbpersonne = 8;
            $recetteentree->user_id = 3;
            $recetteentree->type = "entree";
            $recetteentree->materiel = "Vous aurez besoin d'un saladier, une cuillère, un couteaux, une passoire et un plat a tarte.";
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
            $recetteentree2->preparation5 = "Enfourner dans le four pendant 60 min à 180 degrés. Puis déguster.";
            $recetteentree2->cuisson = 60;
            $recetteentree2->nbpersonne = 8;
            $recetteentree2->user_id = 2;
            $recetteentree2->type = "entree";
            $recetteentree2->materiel = "Vous aurez besoin d'un saladier, une cuillère et un couteaux.";
            $recetteentree2->save();

            $recetteentree3 = new Recette();
            $recetteentree3->title = "Salade";
            $recetteentree3->photo = "salade";
            $recetteentree3->ingredient1 = "Concombre";
            $recetteentree3->ingredient2 = "Olives";
            $recetteentree3->ingredient3 = "Champignom";
            $recetteentree3->ingredient4 = "Cornichon";
            $recetteentree3->ingredient5 = "Betrave";
            $recetteentree3->ingredient6 = "Tomates";
            $recetteentree3->preparation1 = "Couper le concombre en petit morceaux.";
            $recetteentree3->preparation2 = "Couper les tomates et la betraves.";
            $recetteentree3->preparation3 = "Couper les cornichon et ajouter les olives.";
            $recetteentree3->preparation4 = "Mélanger tous les incredient une fois couper en petit morceaux.";
            $recetteentree3->preparation5 = "Assésonner avec de la vinegraite et decuster.";
            $recetteentree3->cuisson = 0;
            $recetteentree3->nbpersonne = 3;
            $recetteentree3->user_id = 2;
            $recetteentree3->type = "entree";
            $recetteentree3->materiel = "Vous aurez besoin d'un saladier, une cuillère et un couteaux.";
            $recetteentree3->save();

            $recetteentree4 = new Recette();
            $recetteentree4->title = "Tagliatelles";
            $recetteentree4->photo = "tagliatelles";
            $recetteentree4->ingredient1 = "100g de pâte";
            $recetteentree4->ingredient2 = "1 saumon en papilotter";
            $recetteentree4->ingredient3 = "1 saumon fumé";
            $recetteentree4->ingredient4 = "30g de crème fraiche";
            $recetteentree4->ingredient5 = "Noix de saint jacques";
            $recetteentree4->ingredient6 = "Poivres";
            $recetteentree4->preparation1 = "Cuire les deux saumons dans une poiles avec de l'huile d'olive.";
            $recetteentree4->preparation2 = "Cuire les pâtes dans une casserole avec de l'eau. Une fois cuite, sortir de l'eau et esorer.";
            $recetteentree4->preparation3 = "Mélanger les saumons avec les pâtes.";
            $recetteentree4->preparation4 = "Puis ajouter la crème et remuer.";
            $recetteentree4->preparation5 = "Ajouter le poivres et mélanger encore puis déguster.";
            $recetteentree4->cuisson = 30;
            $recetteentree4->nbpersonne = 2;
            $recetteentree4->user_id = 2;
            $recetteentree4->type = "entree";
            $recetteentree4->materiel = "Vous aurez besoin d'une caserole, une poêle et une fourgette.";
            $recetteentree4->save();

            $recettdejeuner = new Recette();
            $recettdejeuner->title = "Pancake";
            $recettdejeuner->photo = "pancake";
            $recettdejeuner->ingredient1 = "100g de farine";
            $recettdejeuner->ingredient2 = "2 sachets de sucre vanillé et 1 sachet de levure";
            $recettdejeuner->ingredient3 = "3 oeufs";
            $recettdejeuner->ingredient4 = "100g de sucre";
            $recettdejeuner->ingredient5 = "50g de beurre";
            $recettdejeuner->ingredient6 = "40cl de lait";
            $recettdejeuner->preparation1 = "Mélanger les oeufs avec la levure et le sucre vanillé.";
            $recettdejeuner->preparation2 = "Ajouter le sucre en plus si vous voulez en rajoutez.";
            $recettdejeuner->preparation3 = "Ajoutez à cette préparation la farine puis le beurre.";
            $recettdejeuner->preparation4 = "Ajoutez le lait, et remuer la préparation.";
            $recettdejeuner->preparation5 = "Sortez la poêle à crèpe puis disposer d'une noix de beurre sur la poêle, puis ajouter une cuilère de pâte, retourner cette pâte une fois que la premier face est cuite. Quand c'est bien cuit, déguster.";
            $recettdejeuner->cuisson = 10;
            $recettdejeuner->nbpersonne = 4;
            $recettdejeuner->user_id = 2;
            $recettdejeuner->type = "dejeuner";
            $recettdejeuner->materiel = "Vous aurez besoin d'une poele à crèpe, un saladier et une cuilère.";
            $recettdejeuner->save();

            $recettdejeuner2 = new Recette();
            $recettdejeuner2->title = "Brioche";
            $recettdejeuner2->photo = "brioche";
            $recettdejeuner2->ingredient1 = "500g de farine";
            $recettdejeuner2->ingredient2 = "1 sachet de levure";
            $recettdejeuner2->ingredient3 = "2 oeufs";
            $recettdejeuner2->ingredient4 = "80g de sucre";
            $recettdejeuner2->ingredient5 = "80g de beurre";
            $recettdejeuner2->ingredient6 = "200ml de lait";
            $recettdejeuner2->preparation1 = "À la main ou au robot : Dans un saladier, battez les œufs, le lait, le sucre et le sel puis versez la farine et enfin la levure. Mélangez bien au robot pétrisseur pendant 7 minutes à vitesse lente (vitesse 1) + 5 à 7 minutes à vitesse 2 (ou le contraire). Si vous pétrissez à la main, comptez une vingtaine de minutes de pétrissage actif";
            $recettdejeuner2->preparation2 = "Incorporez ensuite le beurre mou coupé en morceaux et pétrissez lentement (environ 7 minutes au robot pétrisseur) jusqu'à obtention d'une pâte souple et homogène. Arrêtez de pétrir dès que le beurre est bien incorporé.";
            $recettdejeuner2->preparation3 = "La pâte doit être très lisse, souple et élastique.";
            $recettdejeuner2->preparation4 = "Laissez lever à l'abri des courants d'airs pendant 1h30 à 2 heures minimum en pensant à dégazer la pâte une fois durant la levée.";
            $recettdejeuner2->preparation5 = "Quand la levée est terminée, rompez la pâte avec le poing pour la dégazer (chasser l’air), étalez-la puis pliez-la puis façonnez votre ou vos brioches (ou pains au lait). Normalement cette quantité est pour 2 brioches ou environ 16 pains au lait. Laissez pousser à nouveau à couvert dans un endroit tiède, pendant 45 minutes à 1 heure selon la température de la pièce. Dorez à l’œuf entier, parsemez de sucre en grains (ou laissez-la nature) et faites cuire environ 25-30 minutes à 180°C.";
            $recettdejeuner2->cuisson = 40;
            $recettdejeuner2->nbpersonne = 6;
            $recettdejeuner2->user_id = 2;
            $recettdejeuner2->type = "dejeuner";
            $recettdejeuner2->materiel = "Vous aurez besoin d'une poele à crèpe, un saladier et une cuilère.";
            $recettdejeuner2->save();



            $favorie = new Recette_user();
            $favorie->user_id = 1;
            $favorie->recette_id = 1;
            $favorie->save();

           

            for ($i = 1; $i < 3; $i++) {
                $commentaire = new Commentaire;
                $commentaire->content = 'Trop bon cette recette';
                $commentaire->user_id = $i;
                $commentaire->recette_id = $i;
                $commentaire->save();
            }

            
                $commentaire2 = new Commentaire;
                $commentaire2->content = 'Je recommande cette recette';
                $commentaire2->user_id = 2;
                $commentaire2->recette_id = 1;
                $commentaire2->save();


                $commentaire3 = new Commentaire;
                $commentaire3->content = 'Facile à réaliser, très bon, je recommande.';
                $commentaire3->user_id = 3;
                $commentaire3->recette_id = 2;
                $commentaire3->save();
          
           




          
       
       
    }
}
