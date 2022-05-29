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
        function afficherOrdinateur($id){
            $ordis=lireOrdinateurById($id);
            require "vue/afficherOrdinateur.php";
        }
        function supprimerOrdinateur($id){
            supprimerOrdinateurBD($id);
            $ordis=lireOrdinateurById($id);
            header("Location: index.php?action=tab");
        }
        function creerOrdinateur(){
            require "vue/formulaireOrdinateur.php";
        }
        function creerValidationOrdinateur(){
            $file = $_FILES['image'];
            $repertoire = "public/images/";
            $nomImageAjoute = ajouterImage($file,$repertoire);
            ajouterOrdinateurBd($_POST['denomination'], $_POST['processeur'],$_POST['prix'],$_POST['ecran'],$_POST['vive'],$nomImageAjoute,$_POST['lien']);
            header("Location: index.php?action=tab");
        }
        function afficherCardOrdinateurs(){
            $tabOrdinateurs=lireOrdinateurs();
            require "vue/cardOrdinateurs.php";
        }
        function modifierOrdinateur($id){
            echo "Modifier ORDINATEUR id=".$id."<br>";
            $ordis=lireOrdinateurById($id);
            require "vue/modifierOrdinateur.php";
        }
        function modifiervalidationOrdinateur(){
            afficherTableau($_POST,"POST");
            echo "Modifier VALIDATION ORDINATEUR id<br>";
            modificationOrdinateurBD($_POST['id'],$_POST['denomination'], $_POST['processeur'],$_POST['prix'],$_POST['ecran'],$_POST['vive'],$_POST['image'],$_POST['lien']);
            header("Location: index.php?action=tab");
        }
        function ajouerterOrdinateurPanier($id){
            echo "controleur ajouerterOrdinateurPanier id=".$id;
            if(!isset($_SESSION['ordi'])){
                $_SESSION['ordi'] = array();
            }
            if(in_array($id, $_SESSION['ordi'])){
                echo $id." est déjà commander<br>";
            }
            else {
                $_SESSION['ordi'][]=$id;
            }
            afficherTableau($_SESSION['ordi'],"SESSION['ordi']");
            header("Location: index.php?action=card");
        }
        function afficherCommande(){
            foreach($_SESSION['ordi'] as $id){
                $ordis[]=lireOrdinateurById($id);
            }
            if(isset($ordis)){
                if(count($ordis) > 0)
                    require "vue/afficherCommande.php";
            }
            else //echo "La commande est vide<br>";
                header("Location: index.php?action=card");
        }
        function supprimerCommande(){
            $_SESSION['ordi'] = array();
            afficherTableau($_SESSION,"controleur - supprimerCommand _SESSION");
            header("Location: index.php?action=card");
        }
?>