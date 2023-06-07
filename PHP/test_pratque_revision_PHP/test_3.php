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
        return $a * $b."<br>";
    }

    echo calcul(5, 10);
    ?>

    <?php
    // Ecrivez la fonction calculator() traitant les opérations d'addition, de soustraction, de multiplication et de division.

    // Exemple 1
    function calculator($a, $b){
        echo $a + $b."<br>";
        echo $a - $b."<br>";
        echo $a * $b."<br>";
        echo $a / $b."<br>";
        if ($b != 0){
            echo $a / $b."<br>";
        }else{
            echo "Erreur : division par zéro n'est pas autorisée.<br>";
        }
    }

    calculator(5, 5);
    ?>
    <?php
    // Exemple 2
    function calculer($operator, $num1, $num2) {
        switch ($operator) {
            case '+':
                return $num1 + $num2."<br>";
            case '-':
                return $num1 - $num2."<br>";
            case '*':
                return $num1 * $num2."<br>";
            case '/':
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return "Erreur : division par zéro n'est pas autorisée.";
                }
            default:
                return "Opérateur non valide.";
        }
    }
    
    // Exemples d'utilisation
    echo calculer('+', 5, 3);  // Addition : 5 + 3 = 8
    echo calculer('-', 10, 4); // Soustraction : 10 - 4 = 6
    echo calculer('*', 6, 2);  // Multiplication : 6 * 2 = 12
    echo calculer('/', 8, 0);  // Division : Erreur : division par zéro n'est pas autorisée.
    echo calculer('%', 6, 3);  // Opérateur non valide.
    ?>

</body>
</html>