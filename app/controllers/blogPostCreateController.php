<?php
    require('config/database.php');
    require('app/persistences/blogPostData.php');

    //Récupération des variables en POST - Create Post
    $addPost = [
        $createPostTitle = trim(filter_input(INPUT_POST, 'postTitle', FILTER_SANITIZE_STRING)),
        $createPostText = trim(filter_input(INPUT_POST, 'postText', FILTER_SANITIZE_STRING)),
        $postFirstDate = trim(filter_input(INPUT_POST, 'postFirstDate', FILTER_SANITIZE_STRING)),
        $postEndDate = trim(filter_input(INPUT_POST, 'postEndDate', FILTER_SANITIZE_STRING)),
        $postImportance = filter_input(INPUT_POST, 'postImportance', FILTER_SANITIZE_NUMBER_INT),
    ];

    //Non validité générale du formulaire
    $isNotValid = false;

    if(!empty($_POST['submit'])) {
        if(empty($createPostTitle) || empty($createPostText) || empty($postFirstDate) || empty($postEndDate) || empty($postImportance)) {
            $isNotValid = true;
        }
        if($isNotValid === false) {
            $requete = "INSERT INTO posts(id, title, text, first_date, end_date, important) VALUES('','$createPostTitle','$createPostText','$postFirstDate','$postEndDate','$postImportance')";
        }
    }

    include('ressources/views/blogPostCreate.tpl.php');