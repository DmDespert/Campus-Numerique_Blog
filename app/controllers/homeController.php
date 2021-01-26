<?php
    require('config/database.php');
    require('app/persistences/blogPostData.php');

    $isPost = lastBlogPosts($db);

    include('ressources/views/home.tpl.php');
