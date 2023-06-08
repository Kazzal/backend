<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <?php
    $recipe = "Etape 1: des flageolets ! Etape 2: de la saucisse toulousaine";
    $length = strlen($recipe);

    echo "la phrase ci-desss comporte ".$length. "caractère :".PHP_EOL.$recipe;
    ?>

    <?php
    // on remplace le c minuscule par le Cmajuscule et on peut le faire avec un mot entier
    echo str_replace('c', 'C', 'le cassoulet, c\'est très bon');
    ?>



    <?php
    $recipe = [
        "title" => "Salade Romaine",
        "recipe" => "Etape 1 : Lavez la salade ; Etape 2 : euh ...",
        "author" => "laurene.castor@exemple.com",
        "is_enabled" => true,
    ];

    if ($recipe["is_enabled"]){
        return true;
    } else {
        return false;
    }

    $isEnabled = $recipe["is_enabled"];

    if (array_key_exists("is_enabled", $recipe)){
        $isEnabled = $recipe["is_enabled"];
    } else{
        $isEnabled = false;
    }
    ?>
</body>

</html>