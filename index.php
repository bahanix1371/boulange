<?php
    require_once "controleur/controleur.php";
    require_once "outil/outils.php";
    session_start();
    $id_session = session_id();
    if(empty($_GET['action'])){
        afficherAccueil();
    }
    elseif(isset($_GET['action'])) {
            if($_GET['action']=="tab"){
                afficherOrdinateurs();
            }
            elseif($_GET['action'] == 'suppr'){ //OK
                supprimerOrdinateur($_GET['id']);
            }
            else if($_GET['action'] == 'lire'){ //OK
                afficherOrdinateur($_GET['id']);
            }
            elseif($_GET['action'] == 'creer'){ //OK
                creerOrdinateur();
            }
            elseif($_GET['action'] == 'valid-creer'){ //OK
                creerValidationOrdinateur();
            }
            elseif($_GET['action']=="card"){  //OK
                afficherCardOrdinateurs();
            }
            elseif($_GET['action'] == 'modifier'){ //OK
                modifierOrdinateur($_GET['id']);
            }
            elseif($_GET['action'] == 'valid-modifier'){//OK
                echo "Modifier validation";
                modifierValidationOrdinateur();
            }
            elseif($_GET['action'] == 'addpanier'){ //OK
                echo "Ajouter panier id=".$_GET['id'];
                ajouerterOrdinateurPanier($_GET['id']);
            }
            elseif($_GET['action'] == 'panier'){ //OK
                echo "Voir commande";
                if(isset($_SESSION['ordi']))
                    afficherCommande();
                else echo "La session n'existe pas";
            }
            elseif($_GET['action']=="supprpanier"){ 
                echo "Supprimer commande";
                supprimerCommande();
            }
            elseif($_GET['action'] == 'addpanier'){ //OK
                echo "Ajouter panier id=".$_GET['id'];
                ajouerterOrdinateurPanier($_GET['id']);
            }
            else {
                echo "La page n'existe pas";
            } 
    }
    else {
        echo "La page n'existe pas";
    } 
?>