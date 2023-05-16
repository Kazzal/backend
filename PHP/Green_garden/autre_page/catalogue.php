<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Catalogue</title>
</head>

<body>

    <?php
    include "../header.php";
    ?>
    <div>
        <form method="post" action="">
            <label for="search_term">Rechercher un produit:</label>
            <input type="text" name="search_term" id="search_term">
            <input type="submit" name="search" value="Rechercher">
        </form>

        <h1>Catalogue
        </h1>

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
        if (isset($_POST['search'])) {
            $search_term = $_POST['search_term'];
            $sql = "select * from t_d_produit WHERE nom_court like :search 
            or nom_Long like :search";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':search', '%' . $search_term . '%');
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                echo "<p>Résultats de recherche pour : " . $search_term . "</p>";

                while ($row = $stmt->fetch()) {
                    echo "<a href='consult_produit.php?id={$row['Id_Produit']}'>";
                    echo "<div class='card'><img src='img/{$row['Photo']}'<br>";
                    echo "<div class='styleTextProduit'>";
                    echo "<div class='card-body'><strong>Nom produit : </strong>{$row['Nom_court']}</div>";
                    echo "<div class='card-body'><strong>Description : </strong>{$row['Nom_Long']}</div>";
                    echo "<div class='card-body'><strong>Prix : </strong>{$row['Prix_Achat']} €</div>";
                    echo "</div>";

                    echo "<div><input class='styleBtnAjoutPanier' type='submit' value='Ajoutez au panier'></div>";
                    echo "</a>";
                }
            }
        } else {
            $sql = "select * from t_d_produit";
            $stmt = $conn->query($sql);

            if ($stmt->rowCount() > 0) {

                while ($row = $stmt->fetch()) {
                    echo "<a href='consult_produit.php?id={$row['Id_Produit']}'>";
                    echo "<div class='card-body styleCardImg'><img class='styleImgProduit' src={$row['Photo']}></div>";
                    echo "<div class='card'> <img src='img/{$row['Photo']}'<br>";
                    echo "<div class='styleTextProduit'>";
                    echo "<div class='card-body'><strong>Nom produit : </strong>{$row['Nom_court']}</div>";
                    echo "<div class='card-body'><strong>Description : </strong>{$row['Nom_Long']}</div>";
                    echo "<div class='card-body'><strong>Prix : </strong>{$row['Prix_Achat']} €</div>";
                    echo "</div>";

                    echo "<div><input class='styleBtnAjoutPanier' type='submit' value='Ajoutez au panier'></div>";
                    echo "</a>";
                }
            }
        }

        ?>
    </div>

    <?php
    include "../footer.php";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>