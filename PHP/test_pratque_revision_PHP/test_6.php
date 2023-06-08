########################################## AFFICHER DES RECETTES #####################################

<?php
// Déclaration du tableau des RECETTES
$recipes = [
    ["Cassoulet", "[...]", "mickael.andrieu@exemple.com", true,],
    ["Couscous", "[...]", "mickael.andrieu@exemple.com", false,],
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 6</title>
</head>

<body>

    <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++) : ?>
            <li><?php echo $recipes[$lines][0] . " (" . $recipes[$lines][2] . ")"; ?></li>
        <?php endfor; ?>
    </ul>


    <h3>Tableaux Numéroté:</h3>
    <?php
    // Façon 1
    $recipes = ["Cassoulet", "Couscous", "Escalope Milanaise", "Salade César",];

    // Façon 2
    // La fonction array permet aussi de créer un array
    $recipes = array("Cassoulet", "Couscous", "Escalope Milanaise", "Salade César",);

    // Façon 3
    $recipes[0] = "Cassoulet";
    $recipes[1] = "Couscous";
    $recipes[2] = "Escalope Milanaise";

    // Façon 4
    $recipes[] = "Cassoulet"; // créera $recipes[0]
    $recipes[] = "Couscous"; // créera $recipes[1]
    $recipes[] = "Escalope Milanaise"; // créera $recipes[2]

    // pour afficher
    echo $recipes[1]; // Cela affichera : Couscous
    ?>

    <h3>Tableaux Associatifs:</h3>

    <?php
    // Une bien meilleure façon de stocker une recette !
    // Façon 1
    $recipe = [
        "title" => "Cassoulet",
        "recipe" => "Etape 1 : des flageolets, Etape 2 : ...",
        "author" => "john.doe@exemple.com",
        "enabled" => true,
    ];


    // Façon 2
    $recipe['title'] = 'Cassoulet';
    $recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
    $recipe['author'] = 'john.doe@exemple.com';
    $recipe['enable'] = true;

    // Afficher
    echo $recipe["title"]; // afficher Cassoulet
    ?>

    <?php
    $recipes = [
        ["Cassoulet", "[...]", "mickael.andrieu@exemple.com", true,],
        ["Couscous", "[...]", "mickael.andrieu@exemple.com", false,],
    ];

    for ($lines = 0; $lines <= 1; $lines++) {
        echo $recipes[$lines][0];
    }
    ?>

    <?php

    // Déclaration du tableau des recettes
    $recipes = [
        ['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true,],
        ['Couscous', '[...]', 'mickael.andrieu@exemple.com', false,],
    ];

    foreach ($recipes as $recipe) {
        echo $recipe[0]; // Affichera Cassoulet, puis Couscous
    }
    ?>

    <?php
    $recipe = [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
        'author' => 'mickael.andrieu@exemple.com',
        'enabled' => true,
    ];

    foreach ($recipe as $value) {
        echo $value;
    }

    /**
     * AFFICHE
     * CassouletEtape 1 : des flageolets, Etape 2 : ...mickael.andrieu@exemple.com1
     */
    ?>


    <?php

    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => '',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Salade Romaine',
            'recipe' => '',
            'author' => 'laurene.castor@exemple.com',
            'is_enabled' => false,
        ],
    ];

    foreach ($recipes as $recipe) {
        echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . PHP_EOL;
    }

    ?>



    <?php

    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
    ];

    echo '<pre>';
    print_r($recipes);
    echo '</pre>';
    ?>

    

</body>

</html>