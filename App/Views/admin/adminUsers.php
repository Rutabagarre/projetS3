<div id="users-page">
    <div id="users-page-title"><h1>Tout les membres</h1></div>
    <section>
        <?php foreach ($data['users'] as $user): ?>
            <li class="user-card">
                <p>Id : <?= $user->getId() ?></p>
                <p>Nom : <?= $user->getNom() ?></p>
                <p>Prénom : <?= $user->getPrenom() ?></p>
                <p>E-mail : <?= $user->getMail() ?></p>
                <p>Type : <?= $user->getType() ?></p>
            </li>
        <?php endforeach ?>
    </div>
</div>
