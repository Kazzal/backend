<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fonctions - PHP</title>
  </head>
  <body>
    <?php
    
      function calculator($operation, $num1, $num2) {
        switch ($operation) {
            case 'addition':
                $result = $num1 + $num2;
                break;
            case 'soustraction':
                $result = $num1 - $num2;
                break;
            case 'multiplication':
                $result = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Erreur : division par zéro";
                }
                break;
            default:
                $result = "Opération non reconnue";
                break;
        }
    
        return $result;
    }
    
    // Exemples d'utilisation
    echo calculator('addition', 5, 3);  // Résultat: 8
    echo calculator('soustraction', 8, 2);  // Résultat: 6
    echo calculator('multiplication', 4, 6);  // Résultat: 24
    echo calculator('division', 10, 2);  // Résultat: 5
    echo calculator('division', 10, 0);  // Résultat: Erreur : division par zéro
    echo calculator('exponentiation', 2, 3);  // Résultat: Opération non reconnue
    
    ?>
  </body>
</html>
