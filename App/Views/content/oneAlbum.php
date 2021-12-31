<?php
extract($data);
?>

<div id="album-page">
    <li>
        <div id="album-page-header">
            <div>
                <h2><?= $album->getNom() ?></h2>
                <p><?= $album->getArtiste() ?></p>
                <img src="<?= $album->getPochette() ?>">
            </div>
            <div id="album-page-footer">
                <iframe src="<?= $album->getIntegration() ?>" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                <div id="album-page-btns">
                    <?php if (!empty($_SESSION['user'])) {
                        if ($_SESSION['user']['type']=='admin') { ?>
                            <a href="<?= HOST ?>index.php?page=updateAlbum&album=<?= $album->getId() ?>" class="btn-album update">Modifier l'album</a>
                            <a href="<?= HOST ?>index.php?page=deleteAlbum&album=<?= $album->getId() ?>" class="btn-album delete">Supprimer l'album</a>
                        <?php }} ?>
                    <a href="<?= HOST ?>index.php?page=panier&album=<?= $album->getId() ?>" class="btn-album reserver">Réserver l'album</a>
                </div>
            </div>
        </div>
    </li>
</div>