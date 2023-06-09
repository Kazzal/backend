<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 2</title>
</head>

<body>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
    }
    ?>

    <?php
    $a = 1;

    while ($a < 10) {
        echo $a;
        $a++;
    }
    ?>

    <?php
    $i = -1;
    while (++$i <= 150) {
        if ($i % 2 != 0)
            echo "$i . ";
    }
    ?>


    <?php
    // Tableaux à plusieurs dimensions

    // exemple 1
    $tab =
        [
            [1, "janvier", "2016"],
            [2, "février", "2017"],
            [3, "mars", "2018"],
            [4, "avril", "2019"]
        ];

    // On affiche: 3 mars 2018
    echo $tab[2][0] . " " . $tab[2][1] . " " . $tab[2][2] . "<br>";
    ?>

    <?php
    // exemple 2
    $tab[] = array(1, "janvier", "2016");
    $tab[] = array(2, "février", "2017");
    $tab[] = array(3, "mars", "2018");
    $tab[] = array(4, "avril", "2019");

    // On affiche: 3 mars 2018

    echo $tab[2][0] . " " . $tab[2][1] . " " . $tab[2][2] . "<br>";
    ?>

    <?php
    $facture[0] = 500; // représente janvier / 500 euros
    $facture[1] = 620; // représente février

    // $...

    $facture[2] = 300; // représente décembre
    ?>

    <!-- ou bien -->

    <?php
    $facture["janvier"] = 500;
    $facture["février"] = 620;

    // $...

    $facture["décembre"] = 300;
    ?>

    <?php 
    $facture = array("janvier" => 500, "février" => 620, "décembre" => 300);
    ?>

    <?php
    //taillez d'un tableau

     $facture = array("janvier", "février", "décembre");
     
     echo count($facture)."<br>"; // "count()" retourne le nombre d'élement: ici 3

     echo sizeof($facture)."<br>";// "sizeof()" fais la meme chose, il s'agit d'un alias de "count()"
    ?>


    <?php
    // lecture d'un tableau
    $factures = array("janvier" => 500, "février" => 620, "mars" => 300, "avril" => 130, "mai" => 560, "juin" => 350);

    $total_annuel = 0;
    
    // "$factures est le tableau et "as' affecte à la variable à droite(ici "$value") la valeur du tableauen cours de lecture.
    // la valeur de la variable "$value" change donc à chaque tour de boucle.

    foreach ($factures as $value){
        echo $value." &euro;<br>";
        $total_annuel += $value;
    }

    echo "Total annuel de vos factures télphonique: ".$total_annuel." &euro;<br>";


    // On utilise "foreach" pour afficher la clé et la valeur, ici les mois
    foreach ($factures as $key => $value){
        echo $key, " : ", $value,"<br>";
    }

    ?>

    <?php
    $legumes = array('carotte','poivron','aubergine','chou');

    foreach ($legumes as $legume){
        echo $legume."<br>";
    }

    // on peut aussi utiliser "foreach" pour afficher la clé et la valeur,
    foreach ($legumes as $key => $legume){
        echo $key, " : ", $legume,"<br>";
    }
    ?>


</body>

</html>