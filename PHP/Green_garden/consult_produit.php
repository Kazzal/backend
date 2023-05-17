<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>consul_produit</title>
</head>

<body>
<?php
    include "header.php";
?>

    <?php
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $dbname = "greengarden";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
    } catch (PDOException $e) {
        echo "Connection failed " . $e->getMessage();
    }

    if (isset($_GET['id'])) {

        $id_produit = $_GET['id'];

        try {
            $stmt = $conn->prepare("SELECT * FROM t_d_produit where id_produit=:id");
            $stmt->bindValue(':id', $id_produit);
            $stmt->execute();
            $produit = $stmt->fetch(PDO::FETCH_ASSOC);


            $stmt = $conn->prepare("SELECT * FROM t_d_categorie where Id_Categorie=:idcat");
            $stmt->bindValue(':idcat', $produit['Id_Categorie']);
            $stmt->execute();
            $categorie = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo
            "Erreur: " . $e->getMessage();
            exit();
        }
    } else {
        echo "Produit non spécifié";
        exit;
    }

    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1><?php echo $produit['Ref_fournisseur'] . " - " . $produit['Nom_court']; ?></h1>
        <p>Catégorie: <?php echo $categorie['Libelle'] ?></p>
        <p>Description: <?php echo $produit['Nom_Long'] ?></p>
        <p>Prix HT: <?php echo $produit['Prix_Achat'] ?></p>

        <form method="POST" action="ajout_panier.php">
            <input type="hidden" name="id" value="<?php echo $id_produit ?>">
            <input type="submit" value="Ajouter au panier">
        </form>
    </body>

    </html>

    <?php
        include "footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>