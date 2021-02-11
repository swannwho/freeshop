<?php

session_start();

print_r($_POST);

if(isset($_POST['userName']) && isset($_POST['password'])){
    if($_POST['userName'] == "root" && $_POST["password"] == "root"){

        $_SESSION['username'] = 'root';
        $_SESSION['username'] = 'root';

        header("Location: accueil.php");

    }else{
        header("Location: index.php?auth=2");
    }
    

}else if(!isset($_SESSION['userName']) && !isset($_SESSION['password'])){
    
    header("Location: index.php?auth=0");
}
