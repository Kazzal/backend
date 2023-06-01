<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require 'functions.php';



// Récupération des informations de l'utilisateur connecté
$host = "localhost"; // Nom d'hôte de la base de données
$user = "root"; // Nom d'utilisateur de la base de données
$password_db = ""; // Mot de passe de la base de données
$dbname = "greengarden"; // Nom de la base de données

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password_db);
    // configuration pour afficher les erreurs pdo
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <h1>Formulaire de recherche</h1>
    <form method="POST">
        <label for="Recherche">Recherche : </label>
        <input type="search" id=search1 name="search"><br><br>
        <label for="motif">Motif : </label>
        <select name="motif" id="motif"><br><br>
            <option value="v1">NPAI</option>
            <option value="v2">Les absences</option>
            <option value="v3">Les erreurs de commande</option>
            <option value="v4">Les pannes</option>
        </select><br><br>
        <input type="submit" name="envoyer">
    </form>
    
    <?php include 'footer.php'; ?>
</body>

</html>