<?php $titre = "Mon Blog - " . $billet['titre']; ?>
<?php ob_start(); ?>
<article>
    <header>
        <h1 class="titreBillet"><?= $billet['titre'] ?> </h1>
        <time><?php $billet['date'] ?></time>
    </header>
    <p><?= $billet['contenu'] ?></p>
</article>
<hr />
<header>
    <h1 id="titreReponses">Réponses à <?php $billet['titre'] ?></h1>
</header>
<?php foreach ($commentaires as $commentaire) : ?>
    <p><?php echo $commentaire['auteur'] ?> dit :</p>
    <p><?php echo $commentaire['contenu'] ?></p>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>