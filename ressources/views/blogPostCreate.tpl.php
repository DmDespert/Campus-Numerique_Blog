<?php
    include('ressources/views/header.tpl');
?>

<body>
    <form action="" method="POST">
        <div>
            <label for="articleTitle">Titre de votre article</label>
            <input type="text" id="articleTitle" name="articleTitle">
        </div>
        <div>
            <label for="articleText">Votre article</label>
            <textarea type="text" id="articleText" name="articleText"></textarea>
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
    </form>
</body>

<?php
    include('ressources/views/footer.tpl');
?>