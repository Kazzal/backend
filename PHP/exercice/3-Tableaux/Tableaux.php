<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tableaux - PHP</title>
  </head>
  <body>
    <?php
      
       echo "<h3>EXERCICE 0</h3>";

       /* Exercice 0 - var_dump() */
       var_dump($a);
       echo "<br><br>";
       var_dump($a[19001]);
/* --------------------------------------------------------------------------- */

       echo "<hr><br><h3>EXERCICE 1</h3>";

       /* Exercice 1 - Semaine de validation Groupe 19002 */
       $i = -1;
       while ($a[19002][++$i] != "Validation"); 
       $i++;      
       echo "Groupe 19002 :<br>Validation la semaine $i.";
/* --------------------------------------------------------------------------- */

       echo "<hr><br><h3>EXERCICE 2</h3>";

       /* Exercice 2 - Dernière semaine de stage Groupe 19001 */
       $i = -1;
       while ($a[19001][++$i] != "Stage");
       while ($a[19001][$i++] == "Stage"); 
       $i++;
       echo "Groupe 19001 :<br>Stage fini la semaine $i";
/* --------------------------------------------------------------------------- */

       echo "<hr><br><h3>EXERCICE 3</h3>";

      /* Exercice 3 - Tableau des codes des groupes */
      $i = -1;
      $grp = [];
      $grp1 = [];
      while (++$i != count($a))
      {
        $grp[$i] = key($a);
        next($a);
      }
      var_dump($grp);
/* --------------------------------------------------------------------------- */

       echo "<hr><br><h3>EXERCICE 4</h3>";

       /* Exercice 4 - Durée du stage du Groupe 19003 */
       $i = -1;
       while ($a[19003][++$i] != "Stage");
       $j = $i; 
       while ($a[19003][++$i] == "Stage");
       $i = $i - $j;
       echo "Durée du stage du Groupe 19003 :<br>$i semaines.";
    ?>
  </body>
</html>
