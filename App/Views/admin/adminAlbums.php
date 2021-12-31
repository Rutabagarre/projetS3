<?php
extract($data)
?>

<div id="admin-albums">
    <div id="admin-albums-title">
        <h1>Voir tout les albums</h1>
    </div>
    <div id="admin-albums-btns">
        <a href="<?= HOST ?>index.php?page=addAlbum" id="add">Ajouter un album</a>
    </div>

    <div id="admin-albums-list">
        <?php foreach ($albums as $album) {?>
            <a href="<?= HOST ?>index.php?page=oneAlbum&album=<?= $album->getId() ?>">
                <div id="admin-album">
                    <img src="<?= $album->getPochette() ?>">
                    <div>
                        <p><?= $album->getNom() ?></p>
                        <p><?= $album->getArtiste() ?></p>
                        <br>
                        <p>#<?= $album->getId() ?></p>
                    </div>
                </div>
            </a>
        <?php }?>
    </div>
</div>
