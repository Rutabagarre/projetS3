<div id="albums-page">
    <div id="albums-page-title"><h1>Nos albums</h1></div>
    <section>
        <?php foreach ($data['albums'] as $album): ?>
            <li class="albums-page-album">
                <img src="<?= $album->getPochette() ?>">
                <h2><?= $album->getNom() ?></h2>
                <p><?= $album->getArtiste() ?></p>
                <a href="index?page=oneAlbum&album=<?= $album->getId() ?>" class="voir-plus">Voir plus</a>
            </li>
        <?php endforeach ?>
    </section>
</div>
