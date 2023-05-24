<?php
$titre = 'Mon blog';
?>

<?php
ob_start();
?>

<?php
foreach ($billets as $billet) :
?>
    <article>
        <header>
            <a href="<?= "billet.php?id=" . $billet['id'] ?>">
                <h1 class="titreBillet"><?php echo $billet['titre'] ?></h1>
            </a>
            <time><?php echo $billet['date'] ?></time>
        </header>
        <p><?php echo $billet['contenu'] ?></p>
    </article>
    <hr>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php
require 'gabarit.php';
?>