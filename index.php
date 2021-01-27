<?php

    //---FRONT CONTROLER---//

    //Affiche toutes les erreurs php /!--A RETIRER LORS DE LA MISE EN LIGNE--/!
    error_reporting(E_ALL);
    ini_set('display_errors', true);

    //Variables SANITIZING (URL)
    $url = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_ENCODED);
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_ENCODED);
    $urlIsSet = isset($url);

    //---ROADS

    //Dictionnaire des routes - ROADS
    $road = [
        'home' => 'app/controllers/homeController.php',
        'blogpost' => 'app/controllers/blogPostController.php',
        'blogpostadd' => 'app/controllers/blogPostCreateController.php',
        '404' => 'ressources/views/404.tpl',
    ];

    //Test des routes du Front-Controler - ROADS
    if ($urlIsSet === true) {
        if (array_key_exists($url, $road)) {
            $isRoad = $road[$url];
        } else {
            $isRoad = $road['404'];
        }
    } else {
        $isRoad = $road['home'];
    }

    //Temporisation de sortie
    ob_start();
    require $isRoad;
    $render = ob_get_contents();
    ob_end_clean();

    //Affiche résultat (routes)
    echo $render;
