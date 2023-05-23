<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST["login"];
        $password = $_POST["password"];

        $host = "localhost";
        $user = "root";
        $pwd = "";
        $dbname = "greengarden";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
        } catch (PDOException $e) {
            echo "Connection failed " . $e->getMessage();
        }

        $stmt = $conn->prepare('SELECT * FROM t_d_user WHERE Id_User=:id');
        $stmt->bindValue(':id', $user_id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

        <p> Coucou <?php echo $user['Login'] ?> </p>

<?php
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Page d'accueil</title>
</head>

<body>

    <?php
    include "header.php";
    require 'functions.php';
    ?>

    <main>
        <section>
            <div class="categorie"></div>
        </section>
        <section>
            <div class="produits_vedettes"></div>
        </section>
        <section>
            <div class="marques_produits"></div>
        </section>
        <section>
            <div class="infos"></div>
        </section>
    </main>

    <?php
    include "footer.php";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>