<?php
    echo "hello world";
    require('app/persistences/blogPostData.php');
    $isPost = lastBlogPosts($db);

    var_dump($isPost);
    ?>
