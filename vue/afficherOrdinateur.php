<?php
    require_once "outil/outils.php"; 
    ob_start(); 
?>
<br>
<div class="row">
    <div class="col-4">
        <img  style="width:80%; height:auto" src="public/images/<?= $ordis['image']; ?>">
    </div>
    <div class="col-8">
        <br>
        <h3>Processeur : <?= $ordis['processeur']; ?></h3>
        <br>
        <h3>Ecran : <?= $ordis['ecran']; ?></h3>
        <br>
        <h3>Mémoire vive : <?= $ordis['vive']; ?></h3>
        <br>
        <h3>Prix : <?= $ordis['prix']; ?> €</h3>
        <br>
        <h3>lien : <?= $ordis['lien']; ?></h3> 
        
    </div>
</div>

<?php
$content = ob_get_clean();
$titre = $ordis['denomination'];
require "template.php";
?>