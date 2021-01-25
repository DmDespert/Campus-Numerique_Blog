<?php
    $pdo = new PDO('mysql:host=localhost;dbname=blog', 'dmdespert', 'fwjhxey6h');
    $statement = $pdo->query("SELECT name FROM authors");
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    echo htmlentities($row['name']);
?>