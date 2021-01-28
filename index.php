<?php

    //---FONCTION DEBUG---//

    error_reporting(E_ALL);
    ini_set('display_errors',true);
    ini_set('html_errors',false);
    ini_set('display_startup_errors',true);
    ini_set('log_errors',false);

    //Commande de debug avec variable à ajouter :: debug($votre_variable);
    function debug($var) {
        highlight_string("<?php\n" . var_export($var, true) . ";\n?>");
    }

    //---FRONT CONTROLER---//

    //Variables SANITIZING (URL)
    $url = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_ENCODED);
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_ENCODED);
    $urlIsSet = isset($url);

    //---ROADS---//

    //Dictionnaire des routes - ROADS
    $road = [
        'home' => 'app/controllers/homeController.php',
        'blogpost' => 'app/controllers/blogPostController.php',
        'blogpostadd' => 'app/controllers/blogPostCreateController.php',
        'blogpostmodify' => 'app/controllers/blogPostModifyController.php',
        '404' => 'ressources/views/404.tpl',
    ];

    //Personnalisation des titres & descriptions des pages
    $pagesMetaTitles = [
        'home' => $metaTitle = 'Accueil - BLOG',
        'blogpost' => $metaTitle = ' - BLOG',
        'blogpostadd' => $metaTitle = 'Ajouter un article - BLOG',
        'blogpostmodify' => $metaTitle = 'Modifier un article - BLOG',
        '404'     => $metaTitle = '404 - BLOG'
    ];

    $pagesMetaDescriptions = [
        'home' => $metaDescription = "Bienvenue sur le blog template, ceci est la page d'accueil !",
        'blogpost' => $metaDescription = "",
        'blogpostadd' => $metaDescription = "Ajout d'un article au blog",
        'blogpostmodify' => $metaDescription = 'Page de modification des articles',
        '404'     => $metaDescription = "Page d'erreur du site internet"
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

    //Temporisation de sortie - ROADS
    ob_start();
    require_once('config/database.php');
    require('app/persistences/blogPostData.php');
    include('ressources/views/header.tpl');
    require $isRoad;
    include('ressources/views/footer.tpl');
    $render = ob_get_contents();
    ob_end_clean();

    //Affiche résultat (routes)
    echo $render;
