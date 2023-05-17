<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout categorie</title>
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
            isset($_POST['categorie'])
        )

            
            $categorie = escape_string($_POST['categorie']);

        $stmt = $conn->prepare("SELECT * from t_d_categorie where Libelle=:libc");
        $stmt->bindValue(':libc', $_POST['categorie']);
        $stmt->execute();
        $categorie =  $stmt->fetch(PDO::FETCH_ASSOC);


        try {
            $stmt = $conn->prepare("INSERT INTO t_d_categorie (Libelle)
                     VALUES (:libc)");
            $stmt->bindValue(':libc', $categorie);
            $stmt->execute();
            $categorie_id = $conn->lastInsertId();
        } catch (PDOException $e) {
            echo "Erreur: " . $e->getMessage();
            exit();
        }
    }

    ?>




    <h1>Ajout Catégorie</h1>

    <div id="formulairecateg">
        <form method="post" enctype="multipart/form-data">
            <div>
                <label for="libc">Catégorie: </label>
                <input type="text" id="libc" name="categorie" required>
            </div>
            <button id="button" type="submit">Ajouter</button>
        </form>
    </div>

   
    <?php
        include "footer.php";
    ?>
</body>

</html>