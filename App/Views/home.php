<div id="home-page">
    <div id="home-page-title">
        <?php if (!empty($_SESSION['user'])) { ?>
            <h1>Bonjour, <?= $_SESSION['user']['nom'] ?> <?= $_SESSION['user']['prenom'] ?>.</h1>
        <?php } ?>
    </div>

    <section>
        <?php foreach ($data['albums'] as $album): ?>
            <li class="home-album">
                <img src="<?= $album->getPochette() ?>">
                <h2><?= $album->getNom() ?></h2>
                <p><?= $album->getArtiste() ?></p>
                <a href="index?page=oneAlbum&album=<?= $album->getId() ?>" class="voir-plus">Voir plus</a>
            </li>
        <?php endforeach ?>
    </section>
</div>
