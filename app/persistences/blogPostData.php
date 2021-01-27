<?php
    //---HOMECONTROLLER

    //Affiche les 10 derniers articles à l'accueil - DISPLAY LAST 10 POSTS
    function lastBlogPosts (PDO $isDB) {
        $sql = 'SELECT * , nickname FROM posts INNER JOIN authors ON posts.authors_id = authors.id ORDER BY posts.id DESC LIMIT 10';
        $sth = $isDB->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    //---BLOGPOSTCONTROLLER

    //Affiche un article en fonction de son ID - DISPLAY POST (BY ID)
    function blogPostById(PDO $isDB, $idPost) {
        $sql = 'SELECT title, text, first_date, nickname FROM posts INNER JOIN authors ON posts.authors_id = authors.id  WHERE posts.id = :id';
        $sth = $isDB->prepare($sql);
        $sth->bindValue(":id", $idPost, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    //Affiche les commentaires en fonction de l'article récupéré par ID - DISPLAY COMMENTS (BY ID POST)
    function commentsByBlogPost(PDO $isDB, $idPost) {
        $sql = 'SELECT text, nickname FROM comments INNER JOIN authors ON comments.authors_id = authors.id WHERE posts_id = :id';
        $sth = $isDB->prepare($sql);
        $sth->bindValue(":id", $idPost, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    //---BLOGPOSTCREATECONTROLLER

    //Récupère et affiche les auteurs dans le select sur la page de création d'article - CREATE POST
    function getAuthors(PDO $isDB) {
        $sql = 'SELECT * FROM authors';
        $sth = $isDB->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    //Récupère les champs de la création du formulaire, et les envoies dans la BDD - CREATE POST
    function blogPostCreate(PDO $isDB, $createPostTitle, $createPostText, $createPostFirstDate, $createPostEndDate, $createPostImportance, $createPostAuthor) {
        $sql = 'INSERT INTO posts(title, text, first_date, end_date, important, authors_id) VALUES (:postTitle, :postText, :postFirstDate, :postEndDate, :postImportance, :postAuthor)';
        $sth = $isDB->prepare($sql);
        $sth->bindValue(":postTitle", $createPostTitle);
        $sth->bindValue(":postText", $createPostText);
        $sth->bindValue(":postFirstDate", $createPostFirstDate);
        $sth->bindValue(":postEndDate", $createPostEndDate);
        $sth->bindValue(":postImportance", $createPostImportance);
        $sth->bindValue(":postAuthor", $createPostAuthor);
        $sth->execute();
    }
