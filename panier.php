<?php session_start() ?>



<!DOCTYPE html>
<html lang="en">

<?php include ("head.php") ?>

<body>
    <?php include ('nav.php') ; ?>
    <section class = "container my-3">
          <?php if (isset($_GET['commande']) && $_GET['commande'] == 1){ ; ?>
          <div class="alert alert-success" role="alert">
          Votre commande a été validée. Vous la recevrez dans quelques jours à votre domicile ! 
          </div>   
          <?php       
          }; ?>
          <h1>Votre profil</h1>      
          <div class="card card-outline-secondary my-3"> 
              <div class="card-header"><h3>Liste de vos achats</h3> </div>
              <div class="card-body">
                  
                    <?php 

                      include './data/products.php';

                    if( count($_SESSION['panier'])!== 0){

                          foreach($products as $categories):
                            
                            for($i = 0 ; $i< count($categories) ; $i++ ){
                              $article = $categories[$i] ;

                              foreach($_SESSION['panier'] as $panierId): 
                                if ($article["id"]  == $panierId){
                                  
                                  ?> 
                                  <div class = "d-flex justify-content-between ">
                                      <p> <?= $article['name'] ?> </p>
                                      <a class = 'btn btn-danger' href="panier.php?current=Panier&amp;commande=2">Supprimer cet article</a>
                                  </div>
                                  <hr>
                                  
                                <?php
          
                                }
                              endforeach ;

                            }
                          endforeach ; 
                    }
                      ?>
                      <a href= "panier.php?current=Panier&commande=1" class="btn btn-success">Commander</a>
              </div>
          </div>
    </section>  

    <?php include ('footer.php') ; ?>
  </body>
</html>