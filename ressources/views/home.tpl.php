<?php
    include('ressources/views/header.tpl');

    if (!empty($isPost)) {
        foreach ($isPost as $title) {
            echo "<li>" . $title["title"] . "</li>";
            echo "<li>" . $title["text"] . "</li>";
        }
    } else {
        echo "Il n'y a pas d'articles aujourd'hui, revenez dans un siècle";
    }

    include('ressources/views/footer.tpl');