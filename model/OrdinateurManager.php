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
