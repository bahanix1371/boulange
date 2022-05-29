<?php
    require_once "OrdinateurManager.php"; 
    require_once "../outil/outils.php";    
    
    echo "<h2>Test module model</h2>";
    echo "<h3>Ajouter ordi</h3>";
    ajouerOrdinateurBd("Ordi1","proces1",1111,"ecran1","vive1","image1","lien1");
    ajouerOrdinateurBd("Ordi2","proces2",2222,"ecran2","vive2","image2","lien2");
    ajouerOrdinateurBd("Ordi3","proces3",3333,"ecran3","vive3","image3","lien3");

    echo "<h3>Lire les ordinateurs</h3>";
    $ordi = lireOrdinateurs();
    afficherTableau($ordi,"ordi");
?>