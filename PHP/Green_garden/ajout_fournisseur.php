<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Fournisseur</title>
</head>

<body>
    <?php
    include "header.php";
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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérification si le formulaire a été soumis
        if (
            isset($_POST['nom_fournisseur'])
        )

            
            $nom_fournisseur = escape_string($_POST['nom_fournisseur']);

        $stmt = $conn->prepare("SELECT * from t_d_fournisseur where Nom_Fournisseur=:nomf");
        $stmt->bindValue(':nomf', $_POST['nom_fournisseur']);
        $stmt->execute();
        $categorie =  $stmt->fetch(PDO::FETCH_ASSOC);


        try {
            $stmt = $conn->prepare("INSERT INTO t_d_fournisseur (Nom_Fournisseur)
                     VALUES (:nomf)");
            $stmt->bindValue(':nomf', $nom_fournisseur);
            $stmt->execute();
            $fournisseur_id = $conn->lastInsertId();
        } catch (PDOException $e) {
            echo "Erreur: " . $e->getMessage();
            exit();
        }
    }

    ?>




    <h1>Ajout d'un fournisseur</h1>

    <div id="formulairefourni">
        <form method="post" enctype="multipart/form-data">
            <div>
                <label for="nomf">Nom fournisseur: </label>
                <input type="text" id="nomf" name="nom_fournisseur" required>
            </div>
            <button id="button" type="submit">Ajouter</button>
        </form>
    </div>

   
    <?php
        include "footer.php";
    ?>
</body>

</html>