<?php

    function lastBlogPosts (PDO $isDB) {
        $result = $isDB->query('SELECT * , nickname FROM posts INNER JOIN authors ON posts.authors_id = authors.id ORDER BY posts.id DESC LIMIT 10');
        return $result ->fetchAll(PDO::FETCH_ASSOC);
    }

    function blogPostById(PDO $isDB, $idPost) {
        $resultPost = $isDB->query("SELECT title, text FROM posts WHERE id = $idPost");
        return $resultPost ->fetch(PDO::FETCH_ASSOC);
    }

    function commentsByBlogPost(PDO $isDB, $idPost) {
        $resultPost = $isDB->query("SELECT text FROM comments INNER JOIN authors ON comments.authors_id = authors.id WHERE posts_id = $idPost");
        return $resultPost ->fetch(PDO::FETCH_ASSOC);
    }