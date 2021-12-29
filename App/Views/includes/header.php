<nav>
<!-- Pages -->
    <a class="lien gauche" href="<?= HOST ?>index.php?page=home"><i class="fas fa-home"></i> Accueil</a>
    <a class="lien gauche" href="<?= HOST ?>index.php?page=allAlbums"><i class="fas fa-compact-disc"></i> Albums</a>
    <a class="lien gauche" href="<?= HOST ?>index.php?page=playlist"><i class="fas fa-music"></i> Playlist</a>
    <?php if (!empty($_SESSION['user'])) { ?>
        <a class="lien gauche" href="<?= HOST ?>index.php?page=panier"><i class="fas fa-shopping-cart"></i> Panier</a>
        <?php if ($_SESSION['user']['type']=='admin') {?>
            <a class="lien gauche rouge" href="<?= HOST ?>index.php?page=admin"><i class="fas fa-user-cog"></i> Admin</a>
        <?php } ?>
    <?php } ?>

<!-- Connexion -->
    <?php if (empty($_SESSION['user'])) { ?>
        <a class="lien droite" href="<?= HOST ?>index.php?page=register">S'enregistrer</a>
        <a class="lien droite" href="<?= HOST ?>index.php?page=login"><i class="fas fa-sign-in-alt"></i> Se connecter</a>
    <?php } else {?>
        <a class="lien droite rouge" href="<?= HOST ?>index.php?page=deconnexion"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
    <?php } ?>
</nav>

