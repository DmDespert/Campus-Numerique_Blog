<?php

    $category = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);

    $isCategory = blogPostByCategory($db, $category);

    include('ressources/views/category.tpl');

