<?php
extract($data);

?>
   <?php if (!empty($errors)) {?>
       <div id="confirmation-reservation">
    <?php foreach ($errors as $error){?>
    <p><?= $error ?></p>
    <?php }?>
    </div>
<?php } ?>
<div id="panier-page">
    <div id="panier-page-title"><h1>Votre panier</h1></div>
    <div id="panier-page-resas">
        <?php foreach ($reservations as $reservation) {?>
            <div id="panier-page-resa">
                <img src="<?= $reservation->getPochette() ?>">
                <div>
                    <p><?= $reservation->getNom() ?></p>
                    <p><?= $reservation->getArtiste() ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

