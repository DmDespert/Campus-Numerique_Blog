<?php
    function lastBlogPosts (PDO $isDB) {
        $result = $isDB->query('SELECT * FROM posts ORDER BY id DESC LIMIT 10');
        return $result ->fetchAll();
    }