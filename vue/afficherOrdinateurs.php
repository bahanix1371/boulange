<?php ob_start()?>
<?php require_once "model/OrdinateurManager.php"; ?>

<div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
        <th scope="col">Id</th>
          <th scope="col">Image</th>
          <th scope="col">Denomination</th>
          <th scope="col">Processeur</th>
          <th scope="col">Ecran</th>
          <th scope="col">Mémoire vive</th>
          <th scope="col">Lien</th>
          <th scope="col" colspan="3">Prix</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($tabOrdinateurs as $ordis) { ?>
          <tr class="align-middle">
            <td scope="row"><?php echo $ordis['id'] ?></td>
            <td><img width="80" src="public/images/<?php echo $ordis['image']; ?>"></td>
            <td><?php echo $ordis['denomination']; ?></td>
            <td><?php echo $ordis['processeur']; ?></td>
            <td><?php echo $ordis['ecran']; ?></td>
            <td><?php echo $ordis['vive']; ?></td>
            <td><?php echo $ordis['lien']; ?></td>
            <td><?php echo $ordis['prix']; ?></td>
            <td><a href="index.php?action=lire&id=<?= $ordis['id']; ?>" class="btn btn-info">Lire</a></td>
            <td><a href="index.php?action=modifier&id=<?= $ordis['id']; ?>" class="btn btn-warning">Modifier</a></td>
            <td><a href="index.php?action=suppr&id=<?= $ordis['id']; ?>" class="btn btn-danger">Supprimer</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table> 
</div> 
<?php
    $content=ob_get_clean();
    $titre = "Liste des ordinateurs de la bibliothéque";
    require "template.php";
?>