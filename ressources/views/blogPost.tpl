<?php
    include('ressources/views/header.tpl');

    if (!empty($isPost)) {
        foreach ($isPost as $row) {
            echo "<li>" . $row . "</li>";
        }
    } else {
        echo "Article inaccessible ou introuvable !";
    }

    if (!empty($isPost)) {
        foreach ($isPostComments as $row) {
        echo "<li>" . $row . "</li>";
        }
    } else {
        echo "Article inaccessible ou introuvable !";
    }

    include('ressources/views/footer.tpl');