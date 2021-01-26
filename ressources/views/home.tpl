<?php
    include('ressources/views/header.tpl');

    if (!empty($lastsPosts)) {
        foreach ($lastsPosts as $row) {
            echo "<li>" . $row["title"] . "</li>";
            echo "<li>" . $row["text"] . "</li>";
            echo "<li>" . $row["nickname"] . "</li>";
        }
    } else {
        echo "Il n'y a pas d'articles aujourd'hui, revenez dans un siècle";
    }

    include('ressources/views/footer.tpl');