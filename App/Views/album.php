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
                <a href="<?= HOST ?>index?page=panier&album=<?= $album->getId() ?>" class="btn-reserver">Réserver l'album</a>
            </div>
        </div>
    </li>
</div>