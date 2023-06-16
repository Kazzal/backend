<?php

try{
// Accès aux base de données
$access = new PDO("mysql:host=localhost;dbname=mayanalgn;charset=utf8", "root", "");

// lorque nous aurons des erreurs alors il doit afficher ces erreurs
$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch(Exception $e){
    $e->getMessage(); //recupérer le message
}
?>