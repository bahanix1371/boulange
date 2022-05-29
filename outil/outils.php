<?php

function afficherTableau($tab,$titre){
    echo "<hr>";
    echo "<p>Tableau ".$titre."</p>";
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
    echo "<hr>";
}

function afficherChaine($chaine, $titre){
    echo "<p>".$titre."</p>";
    echo "Chaine = ". $chaine . "<br>";
    echo "<hr>";
}

?>