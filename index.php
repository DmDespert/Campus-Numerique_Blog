<?php

    //----FRONT CONTROLER----//

    //Initialisation de la session Php (création du cookie)
    session_start();

    $url = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_ENCODED);
    $urlIsSet = isset($url);

    //Dictionnaire des routes
    $road = [
        'homeController' => 'app/controllers/homeController.php',
    ];

    //Test des routes du Front-Controler
    if ($urlIsSet === true) {
        if (array_key_exists($url, $road)) {
            $isRoad = $road[$url];
        } else {
            $isRoad = $road['homeController'];
        }
    } else {
        $isRoad = $road['homeController'];
    }

    ob_start();
    require('config/database.php');
    require $isRoad;
    //require('elements/footer.php');
    $render = ob_get_contents();
    ob_end_clean();

    echo $render;

?>

