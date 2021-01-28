<?php
    //---DISPLAY POST & COMMENTS (BY ID)---//

    $isPost = blogPostById($db, $id);
    $isPostComments = commentsByBlogPost($db, $id);

    $title = $isPost["title"];
    $text = $isPost["text"];
    $author = $isPost["nickname"];

    $textComment = $isPostComments["text"];
    $authorComment = $isPostComments["nickname"];

    include('ressources/views/blogPost.tpl');