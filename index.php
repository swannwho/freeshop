

<!DOCTYPE html>
<html lang="en">

<?php include ("head.php") ?>
<body>
    <section class="container">

    <?php if(isset($_GET['disconnected'])){
        if ($_GET['disconnected'] == '1'){
            ?> <div class="alert alert-success" role="alert">
           Vous êtes bien déconnecté
          </div> <?php
          session_start();
          $_SESSION[""]  = "";
          session_destroy();
        }
    }else if (isset($_GET['auth']) && ($_GET['auth'] == 2)){

      ?>  <div class="alert alert-danger" role="alert">
        Mauvais login ou password erroné, veuillez réessayer! 
       </div> 

   <?php }?>


            <form class ="my-3" action="connection.php" method="POST">
                <div class="mb-3">
                    <label for="userName" class="form-label">Identifiant</label>
                    <input type="text" class="form-control" name = "userName" id="userName" placeholder = "Votre identifiant" >
                    
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder = "Mot de passe">
                </div>

                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
    </section>  
    
<?php  ?>   


<?php include('footer.php') ?>

</body>

</html>