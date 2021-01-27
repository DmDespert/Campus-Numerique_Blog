<?php
    include('ressources/views/header.tpl');
?>

<main>
    <?php
        if (!empty($lastsPosts)) {
            foreach ($lastsPosts as $row) {
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["text"] . "</p>";
                echo "<p> Écris par " . $row["nickname"] . "</p>";
            }
        } else {
            echo "Il n'y a pas d'articles aujourd'hui, revenez dans un siècle";
        }
    ?>
</main>

<?php
    include('ressources/views/footer.tpl');
?>