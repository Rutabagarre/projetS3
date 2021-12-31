<?php
extract($data)
?>

<div id="delete-album-page">
    <div id="delete-album-page-title">
        <h2>Supression d'un album</h2>
    </div>

    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <div id="delete-album-page-nom" class="form-element">
                <label for="nom">Nom de l'album : </label>
                <input type="text" name="nom" id="nom" value="<?= $album->getNom() ?>">
            </div>
            <div id="delete-album-page-artiste" class="form-element">
                <label for="artiste">Nom de l'artiste : </label>
                <input type="text" name="artiste" id="artiste" value="<?= $album->getArtiste() ?>">
            </div>
        </fieldset>
        <input type="submit" value="Supprimer" id="delete-album-page-envoyer">
    </form>
</div>