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
        function modifierOrdinateur($id){
            echo "Modifier ORDINATEUR id=".$id."<br>";
            $ordis=lireOrdinateurById($id);
            require "vue/modifierOrdinateur.php";
        }   
?>