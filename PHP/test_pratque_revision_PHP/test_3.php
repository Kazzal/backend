<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 3</title>
</head>
<body>
    <?php
    function bonjour($prenom, $nom){
        echo "Bonjour ".$prenom." ".$nom."<br>";
    }

    bonjour("Dave", "LOPER");
    ?>

 
    <!-- renvoyer des infos -->
    <?php
    function addition($a, $b){
        $resultat = $a + $b;
        return $resultat;
    }
    $resultat = addition(1, 2);

    echo $resultat."<br>";

    // ou si on veut juste le retour
    echo $resultat."<br>";
    ?>

    <?php
    function calcul($a, $b){
        return $a * $b;
    }

    echo calcul(5, 10);
    ?>
</body>
</html>