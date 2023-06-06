<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 1</title>
</head>

<body>

    <?php echo "<h1>Bonjour tout le monde</h1>"; ?>
    <h1><?php echo "Bonjour tout le monde"; ?></h1>
    <?php
    $bonjour = "Bonjour tout le monde";
    echo "<b>$bonjour</b>";
    ?>



    <?php
    // Concaténation
    $a = "winter";
    echo $a . " is coming !";


    $a = $b = 1;
    echo "a vaut " . $a . " et " . "b vaut " . $b;


    // Condition
    $age = 25;
    if ($age >= 18) {
        $reponse = "Tu es majeur";
    } else {
        $reponse = "Tu es mineur";
    }

    echo $reponse;


    // Tableau
    $color[] = "red";
    $color[] = "blue";
    $color[] = "white";
    $color[] = "black";

    echo "La couleur de l'indice numéro 1 est " . $color[1] . ".";
    ?>



    <?php
    // Porté des variable
    $a = $b = 2;

    function somme()
    {
        global $a, $b;

        $b = $a + $b;
    }

    somme();
    echo $b . "<br>";
    ?>

    <?php
    function test1()
    {
        static $a = 0;
        echo "$a<br/>";

        $a++;
    }

    test1();
    test1();
    test1();
    ?>



    <?php

    // variable dynamique ou les variable variable
    $var1 = "bonjour";
    $$var1 = "le monde";
    echo $bonjour;
    ?>


    <?php
    // Variable superglobales
    $_GET["societe"] = "Afpa";
    echo $_GET["societe"];
    ?>


    <?php
    // Forcer le type d'une variable
    $a = 15.125863;

    settype($a, "integer");
    echo $a; // ici $a vaut 15 car il a été convertie d'une décimale en entier
    ?>

    <?php
    $a = 6.32172;
    $b = intval($a);
    $c = doubleval($a);

    echo $a - $b - $c;
    ?>

    <?php
    // Constantes
    define("EURO", 6.55957);
    echo EURO;
    ?>


    <?php

    // Permet d'afficher des infos(nom, type, valeur, longueur/nombre d'éléments, et si c'est un tableau)
    $myVar = "bonjour";
    var_dump($myVar);
    ?>

    <!-- fontion de débogages -->
    <?php
    $myVar = "KO";

    if ($myVar == "OK") {
        echo "C'est bon<br>";
    } else {
        echo "Ouh la la pas bien !<br>"; // Message affiché dans la page web
        error_log("Ouh la la pas bien"); // Message enregistré dans le fichier php_error.log
    }
    ?>
    <?php
    $myVar = "KO";

    if ($myVar == "OK") {
        echo "C'est bon<br>";
    } else {
        echo "Ouh la la pas bien !<br>"; // Message affiché dans la page web
        $message = "Ouh la la pas bien" . __FILE__ . " " . __LINE__;
        error_log($message); // Message php_error.log indique le chemin complet du fichier test1.php
    }
    ?>

    <!-- Variables système -->
    <P><b>Adresse physique du répertoire contenant le répertoire par défaut:</b></P>
    <?php echo ($_SERVER)["DOCUMENT_ROOT"]; ?>

    <P><b>Nom et version du navigateur utilisé par le visiteur(client)</b></P>
    <?php echo ($_SERVER)["HTTP_USER_AGENT"]; ?>

    <p><b>Adresse IP du visiteur qui consulte la page</b></p>
    <?php echo ($_SERVER)["REMOTE_ADDR"]; ?>

    <p><b>Adresse IP du serveur</b></p>
    <?php echo ($_SERVER)["SERVER_NAME"]; ?>


    <!-- Les fonctions PRINTF et SPRINTF servent de formatage de chaînes -->
    <?php
    $euro = 6.55957;
    printf("%.2f<br>", $euro);

    $money1 = 68.75;
    $money2 = 54.35;
    $money = $money1 + $money2;
    echo $money;
    echo " affichage sans printf: " . $money . "<br>";

    $monformat = sprintf("%01.2f", $money);
    echo $monformat;
    echo " affichage avec printf: " . $monformat . "<br>";
    $year = "2002";
    $month = "4";
    $day = "5";
    $date = sprintf("%04d-%02d-%02d", $year, $month, $day);
    echo $date;
    echo " affichage avec sprintf: " . $date;
    ?>

    <!-- Ecrivez un script qui affiche l'adresse IP du serveur et celle du client -->
    <?php
    $addr_IP_serveur = $_SERVER["SERVER_ADDR"];
    $addr_IP_client = $_SERVER["REMOTE_ADDR"];

    echo "L'adresse IP du serveur est : " . $addr_IP_serveur . " et l'adresse IP du client est : " . $addr_IP_client;
    ?>

</body>

</html>