<?php
    //---DISPLAY POST & COMMENTS (BY ID)

    $isPost = blogPostById($db, $id);
    $isPostComments = commentsByBlogPost($db, $id);
    include('ressources/views/blogPost.tpl');