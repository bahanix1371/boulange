<?php 
ob_start(); 
?>
<br>
    <a href="index.php?action=supprpanier">Supprimer/payer commande</a><br><br>
    <?php $prixTotal = 0 ?>
    <?php foreach($ordis as $ordis) { ?>     
        <p><?= $ordis['denomination']; ?> X 1 = <?= $ordis['prix']; ?> €</p>
        <hr>
        <?php $prixTotal += $ordis['prix']; ?>
    <?php } ?>   
    <?php echo "<b>prix total=".$prixTotal." €<b>"; ?>

<?php
$content = ob_get_clean();
$titre = "Commande" ;
require "template.php";
?>