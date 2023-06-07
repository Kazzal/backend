<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 4</title>
</head>

<body>
    <h1>Ma page web</h1>

    <?php echo "L'heure: " . date("h:i:s") . "<br>"; ?>
    <?php echo "Date: " . date("d/m/y") . "<br>"; ?>

    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s') . "<br>"; ?></p>

    <?php
    // integrer des guillemet
    echo "Cette ligne a été écrite \"uniquement\" en PHP.<br>";
    ?>

    <?php
    $isAllowedToEnter = "Oui";

    // SI on a l'autorisation d'entrer
    if ($isAllowedToEnter == "Oui") {
        // instructions à exécuter quand on est autorisé à entrer
    } // SINON SI on n'a pas l'autorisation d'entrer
    elseif ($isAllowedToEnter == "Non") {
        // instructions à exécuter quand on n'est pas autorisé à entrer
    } // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
    else {
        echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
    }
    ?>

    <?php
    $isEnabled = true; // La condition d'accès

    if ($isEnabled == true) {
        echo "Vous êtes autorisé(e) à accéder au site ✅";
    }
    ?>

    <?php

    $isEnabled = true;
    $isOwner = false;

    /* si l'utilisateur est actif et qu'il est l'auteur, il peut accéder à la recette validée.
    Sinon, il verra s'afficher un message de refus */
    if ($isEnabled && $isOwner) {
        echo "Accès à la recete validé";
    } else {
        echo "Accès à la recette interdit !";
    }
    ?>

    <?php
    $isAllowedToEnter = true;

    if ($isAllowedToEnter) {
        echo "Bienvenue petit nouveau. :o)";
    } else {
        echo "T'as pas le droit d'entrer !";
    }
    ?>

    <?php
    $isAllowedToEnter = true;

    // Si pas autorisé
    if (!$isAllowedToEnter) {
    }
    ?>

    <?php
    // est autorisé
    $isEnabled = true;
    // est l'auteur
    $isOwner = false;
    $isAdmin = true;

    if (($isEnabled && $isOwner) || $isAdmin) {
        echo "Accès à la recette valdié";
    } else {
        echo "Accès à la recette interdit !";
    }
    ?>

    <p> les deux codes ci-dessous donnent exactement le même résultat :</p>

    <?php
    $chickenRecipesEnabled = true;

    if ($chickenRecipesEnabled) {
        echo '<h1>Liste des recettes à base de poulet</h1>';
    }
    ?>

    <?php $chickenRecipesEnabled = true; ?>

    <?php if ($chickenRecipesEnabled) : ?> <!-- Ne pas oublier le ":" -->

        <h1>Liste des recettes à base de poulet</h1>

    <?php endif; ?><!-- Ni le ";" après le endif -->


    <?php
    $grade = 12;

    switch($grade){
        case 0:
            echo "Tu es vraiment nul !!!";
        break;

        case 5:
            echo "Tu es très mauvais";
        break;

        case 7:
            echo "Tu es mauvais";
        break;

        case 10:
            echo "Tu as pile poil la moyenne, c'est un peu juste...";
        break;

        case 12:
            echo "Tu es assez bon";
        break;

        case 16:
            echo "Tu te débrouilles très bien !";
        break;

        case 20:
            echo "Excellent travail, c'est parfait !";
        break;

        default:
            echo "Désolé, je n'ai pas de message à afficher pour cette note";
    }
    ?>

    <?php
    $userAge = 24;

    $isAdult = ($userAge >= 18) ? true: false;


    $isAdult = ($userAge >= 18);
    ?>

</body>

</html>