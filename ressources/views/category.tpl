<?php

    var_dump($isCategory);

?>
<main>
    <?php foreach($isCategory as $row) : ?>
        <h2><?=$row["title"]?></h2>
    <?php endforeach; ?>
</main>

