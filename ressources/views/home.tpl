<?php

?>

<main>
    <?php
        //Affiche les articles dans le viewer - DISPLAY LAST 10 POSTS
        if (!empty($lastsPosts)) {
            foreach ($lastsPosts as $row) {
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["text"] . "</p>";
                echo "<p> Écris par " . $row["nickname"] . "</p>";
                echo "<p> En date du " . $row["first_date"] . "</p>";
            }
        } else {
            echo "Il n'y a pas d'articles aujourd'hui, revenez dans un siècle";
        }
    ?>
</main>