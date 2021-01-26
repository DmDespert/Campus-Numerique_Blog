<?php
    require('config/database.php');
    require('app/persistences/blogPostData.php');

    $lastsPosts = lastBlogPosts($db);

    include('ressources/views/home.tpl');
