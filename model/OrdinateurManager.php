<?php
require_once "connexion.php";

    function lireOrdinateurs(){
        $pdo = getPdo();
        $sql = "SELECT * FROM ordi";
        $req = $pdo->prepare($sql);
        $req->execute();
        $ordi = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $ordi;
    }

    function lireOrdinateurById($id){
        $pdo = getPdo();
        $req = "SELECT * FROM ordi WHERE id=:id";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":id",$id,PDO::PARAM_STR);
        $cpt = $stmt->execute();
        $ordis = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();  
        return $ordis;
    }

    function ajouterOrdinateurBd($denomination,$processeur,$prix,$ecran,$vive,$image,$lien){
        $pdo = getPdo();
        $req = "
        INSERT INTO ordi (denomination, processeur, prix, ecran, vive, image, lien)
        values (:denomination, :processeur, :prix, :ecran, :vive, :image, :lien)";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":denomination",$denomination,PDO::PARAM_STR);
        $stmt->bindValue(":processeur",$processeur,PDO::PARAM_STR);
        $stmt->bindValue(":prix",$prix,PDO::PARAM_INT);
        $stmt->bindValue(":ecran",$ecran,PDO::PARAM_STR);
        $stmt->bindValue(":vive",$vive,PDO::PARAM_STR);
        $stmt->bindValue(":image",$image,PDO::PARAM_STR);
        $stmt->bindValue(":lien",$lien,PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            echo "ordi insérer id=".$pdo->lastInsertId()."<br>";
        }        
    }

    function supprimerOrdinateurBD($id){
        $pdo = getPdo();
        $req = "Delete from ordi where id = :idOrdinateur";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":idOrdinateur",$id,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            echo "ordis supprimer id=".$id."<br>";
        }
    }

    function supprimerTousOrdinateurs(){
        $pdo = getPdo();
        $req = "Delete from ordis";
        $stmt = $pdo->prepare($req);
        $nbr = $stmt->execute();
        return $nbr;
    }

    function modificationOrdinateurBD($id,$denomination,$processeur,$prix,$ecran,$vive,$image,$lien){
        $pdo = getPdo();
        $req = "
        update ordi 
        set denomination = :denomination, processeur = :processeur, prix = :prix, ecran = :ecran, vive = :vive, image = :image, lien = :lien
        where id = :id";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":id",$id,PDO::PARAM_INT);
        $stmt->bindValue(":denomination",$denomination,PDO::PARAM_STR);
        $stmt->bindValue(":processeur",$processeur,PDO::PARAM_STR);
        $stmt->bindValue(":prix",$prix,PDO::PARAM_INT);
        $stmt->bindValue(":ecran",$ecran,PDO::PARAM_STR);
        $stmt->bindValue(":vive",$vive,PDO::PARAM_STR);
        $stmt->bindValue(":image",$image,PDO::PARAM_STR);
        $stmt->bindValue(":lien",$lien,PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            echo "ordi modifier id=".$id."<br>";
        }
    }
