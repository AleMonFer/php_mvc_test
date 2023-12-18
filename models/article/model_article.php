<?php

function insertArt($nameArt, $prixArt, $bdd){
    try{

        $req = $bdd->prepare("INSERT INTO article (nom_article, prix_article) VALUES (?, ?)");

        $req->bindParam(1,$nameArt,PDO::PARAM_STR);
        $req->bindParam(2,$prixArt,PDO::PARAM_STR);

        $req->execute();

        $message = "Article \"$nameArt\" added with a price of \"$prixArt\"";

        return $message;

    }catch(Exception $error){

        $message = $error->getMessage();

        return $message;

    }
}

?>