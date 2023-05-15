<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <?php
    include "../header.php";
    ?>

    <div>
        <h2>Authentification</h2>
        <form action="process.php" method="POST">
            <div>
                <label for="username">Nom d'utilisateur:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <input type="submit" value="Se connecter">
            </div>
        </form>
    </div>

    <?php
    include "../footer.php";
    ?>

</body>

</html>