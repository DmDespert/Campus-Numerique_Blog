<main>
    <form action="index.php?action=blogpostadd" method="POST">
        <div>
            <label for="postTitle">Titre de votre article</label>
            <input type="text" id="postTitle" name="postTitle">
        </div>
        <div>
            <label for="postText">Votre article</label>
            <textarea type="text" id="postText" name="postText"></textarea>
        </div>
        <div>
            <label for="postFirstDate">Date de publication</label>
            <input type="date" id="postFirstDate" name="postFirstDate">
        </div>
        <div>
            <label for="postEndDate">Date de fermeture de l'article</label>
            <input type="date" id="postEndDate" name="postEndDate">
        </div>
        <label for="postImportance">Importance de l'article</label>
        <select name="postImportance" id="postImportance">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <select name="postAuthor" id="postAuthor">
            <?php foreach ($isAuthors as $row) :?>
                <option value="<?=$row['id']?>"><?=$row["nickname"]?></option>
            <?php endforeach; ?>
        </select>
        <button id="reset" type="reset" value="Tout effacer">Effacer</button>
        <button id="submit" type="submit" name="submit" value="Envoyer">Envoyer</button>
    </form>
</main>
