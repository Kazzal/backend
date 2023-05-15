<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Village Green</h1>
    <img src="img/logo_village_green.jpg" alt="logo village green">

    <?php
    include "header.php";
    ?>

    <div class="search-box">
        <form>
            <input type="text" id="search" name="search" placeholder="Recherche produits">
            <button type="submit">Rechercher</button>
        </form>
    </div>


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

</body>

</html>