<?php

//----FRONT CONTROLER----//

//Initialisation de la session Php (création du cookie)
session_start();

$url = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_ENCODED);
$urlIsSet = isset($url);

//Dictionnaire des routes
$route = [
    'accueil' => 'actionname1',
    'hobbies' => 'actionname2',
    'contact' => 'actionname3',
];

//Test des routes du Front-Controler
if ($urlIsSet === true) {
    if (array_key_exists($url, $route)) {
        $isRoad = $route[$url];
    } else {
        $url = '404';
        $isRoad = 'action/404.php';
    }
} else {
    header("Location: /config/database.php",TRUE,301);
}

ob_start();
require('elements/header.php');
require $isRoad;
require('elements/footer.php');
$render = ob_get_contents();
ob_end_clean();

echo $render;

unset($_SESSION);

?>

