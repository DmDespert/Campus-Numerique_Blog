<?php
    //---DISPLAY LAST 10 POSTS
    $title = "Accueil - Blog";
    $lastsPosts = lastBlogPosts($db);
    include('ressources/views/home.tpl');
