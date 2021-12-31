<?php if (!empty($errors)) {
    foreach ($errors as $error) { ?>
        <p class="error"><?= $error ?></p>
    <?php }
} ?>

<div id="login-page">
    <div id="login-page-title">
        <h1>Se connecter</h1>
    </div>

    <form action="<?= HOST ?>/index.php?page=login" method="post">
        <div id="login-page-mail" class="form-element">
            <label for="mail">E-mail</label>
            <input type="email" name="mail" id="mail">
        </div>
        <div id="login-page-password" class="form-element">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="valid">
            <a href="<?= HOST ?>index.php?page=register">Pas encore inscrit ? Inscrivez-vous</a>
            <input type="submit" value="Se connecter" id="login-page-envoyer">
        </div>
    </form>
</div>