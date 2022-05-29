<?php 
ob_start(); 
?>
<div class="container">
    <form method="POST" action="index.php?page=ordi&action=valid-modifier" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label" for="denomination">Denomination : </label>
        <input class="form-control" type="text" id="denomination" name="denomination" value="<?= $ordis['denomination'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="processeur">Processeur : </label>
        <input class="form-control" type="text" id="processeur" name="processeur" value="<?= $ordis['processeur'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="prix">Prix : </label>
        <input class="form-control" type="number" step=0.01 id="prix" name="prix" value="<?= $ordis['prix'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="ecran">Ecran : </label>
        <input class="form-control" type="text" id="ecran" name="ecran" value="<?= $ordis['ecran'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="vive">Mémoire vive : </label>
        <input class="form-control" type="text" id="vive" name="vive" value="<?= $ordis['vive'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="lien">Lien : </label>
        <input class="form-control" type="text" id="lien" name="lien" value="<?= $ordis['lien'] ?>">
      </div>
      <input type="hidden" name="id" value="<?= $ordis['id'] ?>">
      <input type="hidden" name="image" value="<?= $ordis['image'] ?>">
      <input class="btn btn-primary" type="submit" value="modifier" name="form_ajouter"/> 
</form>
<?php
$content = ob_get_clean();
$titre = "Modifier l'Ordinateur";
require "template.php";
?>