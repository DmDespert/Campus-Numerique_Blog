<!doctype html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--TITLES & DESCRIPTION-->
        <title><?=$pagesMetaTitles[$url]?></title>
        <meta name="description" content="<?=$pagesMetaDescriptions[$url]?>"/>
        <!--FAVICONES-->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <!--FONTS-->

        <!--IMPORTS-CSS-->
        <link rel="stylesheet" href="ressources/css/font-awesome.min.css">
        <!--STYLESHEET-CSS-->
        <link rel="stylesheet" href="ressources/css/style.css">
    </head>

    <body>
        <header>
            <logo>Template blog</logo>
            <div>
                <span>Mon premier blog</span>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php?action=home">Accueil</a></li>
                    <li><a href="index.php?action=blogpostadd">Ajouter un article</a></li>
                </ul>
            </nav>
        </header>