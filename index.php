

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Item - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">


</head>
<body>
    <section class="container">
            <form class ="my-3" action="connection.php" method="POST">
                <div class="mb-3">
                    <label for="userName" class="form-label">Identifiant</label>
                    <input type="text" class="form-control" id="userName" >
                    
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>

                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
    </section>  
    
<?php  ?>   


<?php include('footer.php') ?>

</body>

</html>