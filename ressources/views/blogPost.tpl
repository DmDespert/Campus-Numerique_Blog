<main>
    <?php if (!empty($isPost)): ?>
        <h2><?=$title?></h2>
        <p><?=$text?></p>
        <p>Écris par <?=$author?></p>
    <?php else: ?>
        <p>Article inaccessible ou introuvable !</p>
    <?php endif; ?>

    <?php if (!empty($isPostComments)): ?>
        <p> Commentaires sur l'article : </p>
        <p><?=$textComment?></p>
        <p>Écris par <?=$authorComment?></p>
    <?php else: ?>
        <p>Pas de commentaires à afficher, soyez le premier à en écrire un.</p>
    <?php endif; ?>
    <p><a href="index.php?action=home">Retour à l'accueil</a></p>
    <p><a href="index.php?action=blogpostmodify&id=<?=$id?>">Modifier l'article</a></p>
    <p><a href="index.php?action=blogpostdelete&id=<?=$id?>">Supprimer l'article</a></p>
</main>
