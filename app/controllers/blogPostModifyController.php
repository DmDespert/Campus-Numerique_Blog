<?php
//---MODIFY POST (BY ID)---//

$isPost = blogPostById($db, $id);
$isAuthors = getAuthors($db);
$title = $isPost["title"];
$text = $isPost["text"];
$firstDate = $isPost["first_date"];
$endDate = $isPost["end_date"];
$important = $isPost["important"];

$formatFirstDate = date("d-m-Y", strtotime($firstDate));
$formatEndDate = date("d-m-Y", strtotime($endDate));

$modifyPost = [
    $modifyPostTitle = trim(filter_input(INPUT_POST, 'modifyTitle', FILTER_SANITIZE_STRING)),
    $modifyPostText = trim(filter_input(INPUT_POST, 'modifyText', FILTER_SANITIZE_STRING)),
    $modifyPostFirstDate = trim(filter_input(INPUT_POST, 'modifyDate', FILTER_SANITIZE_STRING)),
    $modifyPostEndDate = trim(filter_input(INPUT_POST, 'modifyEndDate', FILTER_SANITIZE_STRING)),
    $modifyPostImportance = filter_input(INPUT_POST, 'modifyImportance', FILTER_SANITIZE_NUMBER_INT),
    $modifyPostAuthor = filter_input(INPUT_POST, 'modifyAuthor', FILTER_SANITIZE_NUMBER_INT),
];

$isNotValid = false;

if (isset($_POST['submit'])) {
    if (empty($modifyPostTitle) || empty($modifyPostText) || empty($modifyPostFirstDate) || empty($modifyPostEndDate)
        || empty($modifyPostImportance) || empty($modifyPostAuthor)) {
        $isNotValid = true;
        echo "Modification d'article non terminée : veuillez respecter les champs.";
    }
    if ($isNotValid === false) {
        blogPostUpdate($db, $id, $modifyPostTitle, $modifyPostText, $modifyPostFirstDate, $modifyPostEndDate,
        $modifyPostImportance, $modifyPostAuthor);
    }
}


include('ressources/views/blogPostUpdate.tpl');