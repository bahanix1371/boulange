<?php
        require_once "model/OrdinateurManager.php";
        require_once "./outil/outils.php";
        function afficherAccueil(){
            require "vue/accueil.php";
        }
        function afficherOrdinateurs(){
            $tabOrdinateurs=lireOrdinateurs();
            require "vue/afficherOrdinateurs.php";
        }
        function supprimerOrdinateur($id){
            supprimerOrdinateurBD($id);
            $ordis=lireOrdinateurById($id);
            header("Location: index.php?action=tab");
        }
?>