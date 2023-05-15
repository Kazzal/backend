<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inscription</title>
</head>

<body>
    

    <div>
        <h2>Formulaire d'inscription</h2>
        <form action="traitement_inscription.php" method="POST">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required><br><br>

            <label for="confirm_password">Confirmer le mot de passe:</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>

            <label for="client_type">Type de client:</label>
            <select id="client_type" name="client_type">
                <option value="particulier">Particulier</option>
                <option value="professionnel">Professionnel</option>
            </select><br><br>

            <input type="submit" value="S'inscrire">
        </form>
    </div>
</body>

</html>