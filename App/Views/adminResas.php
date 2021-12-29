<?php
extract($data);
?>

<div id="reservations-page">
    <div id="reservations-page-title"><h1>Toutes les reservations</h1></div>
    <div id="reservations-page-resas">
        <?php foreach ($reservations as $reservation): ?>
            <div id="reservations-page-resa">
                <p><strong> Id de la reservation: <?= $reservation->getId_resa() ?></strong></p>
                <p>Id de l'album: <?= $reservation->getId_resa_album() ?></p>
                <p>Id de l'utilisateur: <?= $reservation->getId_resa_user() ?></p>
            </div>
        <?php endforeach ?>
    </div>
</div>

