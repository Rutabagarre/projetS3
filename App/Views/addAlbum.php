<div id="add-album-page">
    <div id="add-album-page-title">
        <h1>Ajout d'un album</h1>
    </div>

    <form action="" method="post" enctype="multipart/form-data">
        <?= !isset($errors)? "" : "<p>$errors</p>" ?>

        <fieldset>
            <div id="add-album-page-nom" class="form-element">
                <label for="nom">Nom de l'album : </label>
                <input type="text" name="nom" id="nom">
            </div>
            <div id="add-album-page-artiste" class="form-element">
                <label for="artiste">Nom de l'artiste : </label>
                <input type="text" name="artiste" id="artiste">
            </div>
            <div id="add-album-page-pochette" class="form-element">
                <label for="pochette">Pochette de l'album : </label>
                <input type="file" name="pochette" id="pochette" accept="image/jpeg image/png">
            </div>
            <div id="add-album-page-integration" class="form-element">
                <label for="integration">Lien integration : </label>
                <input type="text" name="integration" id="integration">
            </div>
        </fieldset>
        <input type="submit" value="Envoyer" id="add-album-page-envoyer">
    </form>
</div>