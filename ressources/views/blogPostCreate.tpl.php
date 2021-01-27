<?php
    include('ressources/views/header.tpl');
?>

<main>
    <form action="app/controllers/blogPostCreateController.php" method="POST">
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
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <button id="reset" type="reset" value="Tout effacer">Effacer</button>
        <button id="submit" type="submit" name="submit" value="Envoyer">Envoyer</button>
    </form>
</main>

<?php
    include('ressources/views/footer.tpl');
?>