<?php
    require('config/database.php');
    require('app/persistences/blogPostData.php');

    $isPost = blogPostById($db, $id);
    $isPostComments = commentsByBlogPost($db, $id);

    include('ressources/views/blogPost.tpl');