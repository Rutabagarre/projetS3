<?php
extract($data);

?>

<?php if (!empty($errors)) {
    foreach ($errors as $error) { ?>
        <p class="error"><?= $error ?></p>
<?php }
}?>

</form>
<div id="register-page">
    <div id="register-page-title">
        <h1>S'enregistrer</h1>
    </div>

    <form action="<?= HOST ?>/index.php?page=register" method="post">
        <div class="form-element">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div class="form-element">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div class="form-element">
            <label for="mail">E Mail</label>
            <input type="email" name="mail" id="mail">
        </div>
        <div class="form-element">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <input type="submit" value="Inscription" id="register-page-envoyer">
</div>