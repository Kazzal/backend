<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// ex 1
    
    // Adresse IP serveur
    $serverIP = $_SERVER['SERVER_ADDR'];
    
    // Adresse IP client
    $clientIP = $_SERVER['REMOTE_ADDR'];
    
    echo "Adresse IP du serveur : " . $serverIP . "<br>";
    echo "Adresse IP du client : " . $clientIP . "<br>";
    ?>
</body>
</html>