<?php
    require('config/database.php');
    require('app/persistences/blogPostData.php');

    //---DISPLAY LAST 10 POSTS

    $lastsPosts = lastBlogPosts($db);

    include('ressources/views/home.tpl');
