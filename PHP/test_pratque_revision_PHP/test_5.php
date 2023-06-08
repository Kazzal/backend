<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 5</title>
</head>

<body>
    <?php

    // Premier utilisateur
    $userName1 = "Mickaël Andrieu";
    $userEmail1 = "mickael.andrieu@exemple.com";
    $userPassword1 = "53cr3t";
    $userAge1 = 34;

    // Deuxieme utilisatrice
    $userName2 = "Laurène Castor";
    $userEmail2 = "laurene.castor@exemple.com";
    $userPassword2 = "P4ssW0rD";
    $userAge2 = 28;


    $user1 = ["Mickaël Andrieu", "mickael.andrieu@exemple.com", "53cr3t", 34];

    echo $user1[0] . "<br>";
    echo $user1[1] . "<br>";
    echo $user1[3] . "<br>";
    ?>

    <?php
    // tableau multidimensionnel
    $mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
    $mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
    $laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

    $users = [$mickael, $mathieu, $laurene];

    echo $users[1][1] . "<br><br>"; // "mathieu.nebra@exemple.com"

    ?>


    <h3>Punition avec le boucle "while":</h3>
    <?php
    $lines = 1;

    while ($lines <= 100) {
        echo "Je ne dois pas regarder les mouches voler quand j\"apprends le PHP.<br><br>";
        $lines++; // $lines = $lines + 1
    }
    ?>

    <?php
    $lines = 3;
    $counter = 0;

    while ($counter < $lines) {
        echo $users[$counter][0] . " " . $users[$counter][1] . "<br><br>";
        $counter++;
    }
    ?>

    <?php
    for ($lines = 0; $lines <= 2; $lines++) {
        echo $users[$lines][0] . " " . $users[$lines][1] . "<br>";
    }
    ?>

    <!-- Si vous hésitez entre les deux, il suffit simplement de vous poser la question suivante : « Est-ce que je sais d'avance combien de fois je veux que mes instructions soient répétées ? ».

    Si la réponse est oui, alors la boucle for  est tout indiquée.

    Sinon, alors il vaut mieux utiliser la boucle while -->


</body>

</html>