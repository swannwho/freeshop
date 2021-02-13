<?php

session_start();

if(isset($_POST['userName']) && isset($_POST['password'])){
    if($_POST['userName'] == "root" && $_POST["password"] == "root"){

        $_SESSION['prenom']  = 'prenomDeBase';
        $_SESSION['nom']  = 'nomDeBase';
        $_SESSION['panier'] = array();

        header("Location: accueil.php?current=Accueil");

    }else{
        header("Location: index.php?auth=2");

    }
    

}else if(!isset($_SESSION['userName']) && !isset($_SESSION['password'])){
    
    header("Location: index.php?auth=0");
}
