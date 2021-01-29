<?php

//---CREATE POST---//

//Récupération des variables en POST - CREATE POST
$addPost = [
    $createPostTitle = trim(filter_input(INPUT_POST, 'postTitle', FILTER_SANITIZE_STRING)),
    $createPostText = trim(filter_input(INPUT_POST, 'postText', FILTER_SANITIZE_STRING)),
    $createPostFirstDate = trim(filter_input(INPUT_POST, 'postFirstDate', FILTER_SANITIZE_STRING)),
    $createPostEndDate = trim(filter_input(INPUT_POST, 'postEndDate', FILTER_SANITIZE_STRING)),
    $createPostImportance = filter_input(INPUT_POST, 'postImportance', FILTER_SANITIZE_NUMBER_INT),
    $createPostAuthor = filter_input(INPUT_POST, 'postAuthor', FILTER_SANITIZE_NUMBER_INT),
];

//Validée ou non validitée générale du formulaire de création d'article - CREATE POST
$isNotValid = false;
$isAuthors = getAuthors($db);

if (isset($_POST['submit'])) {
    if (empty($createPostTitle) || empty($createPostText) || empty($createPostFirstDate) || empty($createPostEndDate)
        || empty($createPostImportance) || empty($createPostAuthor)) {
        $isNotValid = true;
        echo "Création d'article incomplète : veuillez respecter les champs.";
    }
    if ($isNotValid === false) {
        blogPostCreate($db, $createPostTitle, $createPostText, $createPostFirstDate, $createPostEndDate,
        $createPostImportance, $createPostAuthor);
    }
}

include('ressources/views/blogPostCreate.tpl');