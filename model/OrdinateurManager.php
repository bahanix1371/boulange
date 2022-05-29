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
