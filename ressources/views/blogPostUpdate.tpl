<main>
    <form action="index.php?action=blogpostmodify&id=<?=$id?>" method="POST">
        <div>
            <label for="modifyTitle">Titre de votre article</label>
            <input type="text" id="modifyTitle" name="modifyTitle" value="<?=$title?>">
        </div>
        <div>
            <label for="modifyText">Votre article</label>
            <textarea type="text" id="modifyText" name="modifyText"><?=$text?></textarea>
        </div>
        <div>
            <label for="modifyDate">Date de publication</label>
            <input type="date" id="modifyDate" name="modifyDate" value="<?=$formatFirstDate?>">
        </div>
        <div>
            <label for="modifyEndDate">Date de fermeture de l'article</label>
            <input type="date" id="modifyEndDate" name="modifyEndDate" value="<?=$formatEndDate?>">
        </div>
        <label for="modifyImportance">Importance de l'article</label>
        <select name="modifyImportance" id="modifyImportance">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <select name="modifyAuthor" id="modifyAuthor">
            <?php foreach ($isAuthors as $row) :?>
                <option value="<?=$row['id']?>" <?= ($row['id'] == $isAuthor ? "selected" : '')?>><?=$row["nickname"]?></option>
            <?php endforeach; ?>
        </select>
        <div>
            <?php foreach ($isCategories as $row) :?>
                <input type="checkbox" id="<?=$row["name"]?>" name="<?=$row["name"]?>">
                <label for="<?=$row["name"]?>"><?=$row["name"]?></label>
            <?php endforeach; ?>
        </div>
        <button id="reset" type="reset" value="Tout effacer">Effacer</button>
        <button id="submit" type="submit" name="submit" value="Envoyer">Envoyer</button>
    </form>
</main>
