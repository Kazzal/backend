<?php
// Ne pas oublier important!!!!
session_start();

if (isset($_SESSION['user_id'])) :
    // Vérification si l'utilisateur existe déjà dans la base de données
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

    $stmt = $conn->prepare("SELECT * FROM t_d_user WHERE Id_User=:id");
    $stmt->bindValue(':id', $_SESSION['user_id']);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

?>


    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>header</title>
    </head>

    <body>
        <h1>Village Green</h1>
        <img src="img/logo_village_green.jpg" alt="logo village green">



        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="catalogue.php">Catalogue</a></li>
                    <li><a href="consult_panier.php">Panier</a></li>
                    <li><a href="ajout_produit.php">Ajouter un produit</a></li>
                    <li><a href="validation_panier.php">Valider commande</a></li>
                </ul>
            </nav>
        </header>

        <p>Bonjour <?php echo $user['Login']; ?> !</p>

        <form method="POST" action="deconnection.php">
            <input type="hidden" name="logout" value="true">
            <input type="submit" value="Se déconnecter">
        </form>
    <?php else : ?>
        <p><a href="login.php">Se connecter</a> ou <a href="inscription.php">s'inscrire</a></p>
    <?php endif; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>

    </html>