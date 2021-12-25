<div id="delete-album-page">
    <div id="delete-album-page-title">
        <h2>Supression d'un album</h2>
    </div>

    <form action="" method="post" enctype="multipart/form-data">
        <?= !isset($errors)? "" : "<p>$errors</p>" ?>

        <fieldset>
            <div id="delete-album-page-nom" class="form-element">
                <label for="nom">Nom de l'album : </label>
                <input type="text" name="nom" id="nom">
            </div>
            <div id="delete-album-page-artiste" class="form-element">
                <label for="artiste">Nom de l'artiste : </label>
                <input type="text" name="artiste" id="artiste">
            </div>
        </fieldset>
        <input type="submit" value="Envoyer" id="delete-album-page-envoyer">
    </form>
</div>