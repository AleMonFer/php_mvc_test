<?php
    
    include("./models/article/model_article.php");
    include("./utils/bdd.php");

    $message = "";

    if(isset($_POST['submitArt'])){
        if(isset($_POST["nameArt"]) && !empty($_POST["nameArt"])
        && isset($_POST["prixArt"]) && !empty($_POST["prixArt"])){

           
            $nameArt = htmlentities(strip_tags(trim($_POST["nameArt"]))) ;
            $prixArt = htmlentities(strip_tags(trim($_POST["prixArt"])));

            $message = insertArt($nameArt, $prixArt, $bdd);

        }else{

            $message = "Remplissez correctement le Formulaire";

        }
    }
    
    include('./view/view_article.php');
?>
