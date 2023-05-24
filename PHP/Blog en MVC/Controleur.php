<?php
require 'Model.php';

// affiche la liste de tous les billets du blog
function accueil() {
    $billets = getBillets();
    require 'vueAccueil.php';
}

// affiche les détails sur un billet
function billet($idBillet) {
    $billet = getBillet($idBillet);
    $commentaires = getComments($idBillet);
    require 'vueBillet.php';
}

// affiche une erreur
function erreur($msgErreur) {
    require 'vueErreur.php';
}
?>