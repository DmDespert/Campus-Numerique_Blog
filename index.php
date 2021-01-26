<?php

    //----FRONT CONTROLER----//

    //Affiches toutes les erreurs php
    error_reporting(E_ALL);
    ini_set('display_errors', true);

    //GET et SANITIZE l'URL
    $url = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_ENCODED);
    $urlIsSet = isset($url);

    //Dictionnaire des routes
    $road = [
        'home' => 'app/controllers/homeController.php',
        '404' => 'pages/404.php',
    ];

    //Test des routes du Front-Controler
    if ($urlIsSet === true) {
        if (array_key_exists($url, $road)) {
            $isRoad = $road[$url];
        } else {
            $isRoad = $road['home'];
        }
    } else {
        $isRoad = $road['home'];
    }

    ob_start();
    require $isRoad;
    $render = ob_get_contents();
    ob_end_clean();

    echo $render;
