<?php
    require_once "controleur/controleur.php";
    require_once "outil/outils.php";

    if(empty($_GET['action'])){
        afficherAccueil();
    }
    elseif(isset($_GET['action'])) {
        if($_GET['action']=="tab"){
            afficherOrdinateurs();
        }
    }
    
?>