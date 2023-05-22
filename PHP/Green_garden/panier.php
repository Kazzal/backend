<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Panier</title>
</head>

<body>
    <?php
    include "header.php";
    ?>


    <h1>Mon panier</h1>

    <?php
    session_start();
    // Récupération des informations de l'utilisateur connecté
    $host = "localhost"; // Nom d'hôte de la base de données
    $user = "root"; // Nom d'utilisateur de la base de données
    $password_db = ""; // Mot de passe de la base de données
    $dbname = "greengarden"; // Nom de la base de données

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password_db);
        // configuration pour afficher les erreurs pdo
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $totalHT = 0;
        $totalTTC = 0;

        if (isset($_SESSION['panier'])) {
            echo "<table>";
            echo "<tr><th>Produit</th><th>Prix unitaire</th><th>Quantité</th><th>Prix total</th></tr>";
            foreach ($_SESSION['panier'] as $productid => $quantity) {
                $id = $productid;

                $stmt = $conn->prepare("SELECT * FROM t_d_produit WHERE id_produit=:id");
                $stmt->bindValue(':id', $id);
                $stmt->execute();
                $produit = $stmt->fetch(PDO::FETCH_ASSOC);

                $name = $produit['Nom_court'];
                $priceht = $produit['Prix_Achat'];
                $pricettc = $priceht  * (1 + $produit['Taux_TVA'] / 100);

                $total_productht = $priceht * $quantity;
                $total_productttc = $pricettc * $quantity;
                $totalHT += $total_productht;
                $totalTTC += $total_productttc;
                echo "<tr><td>{$name}</td><td>{$priceht} € HT</td><td>{$pricettc} € TTC</td>
				<td>{$quantity}</td><td>{$total_productht} € HT</td><td>{$total_productttc} € TTC</td></tr>";
            }
            echo "</table>";
            echo "<p>Total HT : {$totalHT} €</p>";
            echo "<p>Total TTC : {$totalTTC} €</p>";
        } else {
            echo "<p>Votre panier est vide.</p>";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>

    <p><a href="catalogue.php">Continuer mes achats</a></p>


    <?php
    include "footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>