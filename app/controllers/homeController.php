<?php
    require('config/database.php');
    require('app/persistences/blogPostData.php');

    $isPost = lastBlogPosts($db);
    //var_dump($isPost);

    foreach ($isPost as $title) {
        var_dump($title);
    }