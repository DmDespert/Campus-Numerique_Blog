<?php
    include('ressources/views/header.tpl');
    $title = $isPost["title"];
    $text = $isPost["text"];
    $author = $isPost["nickname"];

    $textComment = $isPostComments["text"];
    $authorComment = $isPostComments["nickname"];
?>

<main>
    <?php
        if (!empty($isPost)) {
            echo "<h2>" . $title . "</h2>";
            echo "<p>" . $text . "</p>";
            echo "<p> Écris par " . $author . "</p>";
        } else {
            echo "Article inaccessible ou introuvable !";
        }

        if (!empty($isPostComments)) {
            echo "<p> Commentaires sur l'article : </p>";
            echo "<p>" . $textComment . "</p>";
            echo "<p>" . $authorComment . "</p>";
        } else {
            echo "Pas de commentaires sur cet article, soyez le premier à en écrire un !";
        }
    ?>
</main>

<?php
    include('ressources/views/footer.tpl');
?>