<main>
    <?php foreach ($lastsPosts as $row) :?>
        <h2><?=$row["title"]?></h2>
        <p><?=$row["text"]?></p>
        <p>Écris par <?=$row["nickname"]?></p>
        <p>En date du <?=$row["first_date"]?></p>
        <a href="index.php?action=blogpost&id=<?=$row['id']?>">En savoir plus</a>
    <?php endforeach; ?>
</main>