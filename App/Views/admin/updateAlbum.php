<?php
extract($data)
?>

<div id="update-album-page">
    <div id="update-album-page-title">
        <h2>Modification d'un album</h2>
    </div>

    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <div id="update-album-page-nom" class="form-element">
                <label for="nom">Nom de l'album : </label>
                <input type="text" name="nom" id="nom" value="<?= $album->getNom() ?>">
            </div>
            <div id="update-album-page-artiste" class="form-element">
                <label for="artiste">Nom de l'artiste : </label>
                <input type="text" name="artiste" id="artiste" value="<?= $album->getArtiste() ?>">
            </div>
            <div id="update-album-page-integration" class="form-element">
                <label for="integration">Lien de l'integration : </label>
                <input type="text" name="integration" id="integration" value="<?= $album->getIntegration() ?>">
            </div>

        </fieldset>
        <input type="submit" value="Modifier" id="update-album-page-envoyer">
    </form>
</div>