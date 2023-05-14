<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Village green</title>
</head>
<body>
    <h1>Village Green</h1>
    <img src="img/logo_village_green.jpg" alt="logo village green">
    
    <div class="search-box">
        <form>
            <input type="text" id="search" name="search" placeholder="Rechercher...">
            <button type="submit">Rechercher</button>
        </form>
    </div>
    <header>
        <nav>
            <ul>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="#">Ajouter/Modifier un produit</a></li>
                <li><a href="#">Ajouter/Modifier un utilisateur</a></li>
                <li><a href="panier.php">Voir mon panier</a></li>
            </ul>
        </nav>
        <div class="login-zone">
            <button>Login</button>
            <button>Inscription</button><br><br>
            <span>Bonjour <span id="username"></span></span>
        </div>
    </header>
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
    <footer>
        <p>&copy; Copyright Village Green by AHAMADA Kazouini</p>
        <div>
            <ul>
                <h3>Informations</h3>

                <li><a href="#">Qui-sommes-nous</a></li>
                <li><a href="#">Nos Magasins</a></li>
                <li><a href="#">Informations légales</a></li>
            </ul>
        </div>
        <div>
            <ul>
                <h3>Réseaux sociaux</h3>

                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">Facebook</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>