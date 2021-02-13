<?php session_start() ?>



<!DOCTYPE html>
<?php include ("head.php") ?>

<body>
<?php include ('nav.php') ; ?>


    <section class = "container my-5">

    <?php 
        if (isset($_POST['prenom']) && isset($_POST['nom'])){
            $_SESSION["prenom"] = $_POST["prenom"];
               $_SESSION["nom"] = $_POST["nom"];

             ?> 
            <div class="alert alert-success" role="alert">
                Vos identifiants ont bien été changés
            </div> 
            
            <?php
        }
        
        ?>


        <h1>Votre profil</h1>

        <form class ="my-3" action="profil.php?curent=Profil" method="POST">
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" name = "prenom" id="prenom" value = ' <?php if (isset($_SESSION['prenom'])){ echo $_SESSION['prenom'] ;}else{ echo 'PrenomPourri';} ?> ' >
                
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom" value = ' <?php if (isset($_SESSION['nom'])){ echo $_SESSION['nom'] ;}else{ echo 'NomAussi';} ?> '>
            </div>

            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>

        

    </section>  


<?php include ('footer.php') ; ?>

</body>
</html>