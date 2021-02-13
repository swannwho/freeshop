<?php session_start()
?>



<!DOCTYPE html>
<html lang="en">

        <?php include ("head.php") ?>
    
    <body>

        <?php include ('nav.php') ; ?>

  <!-- Page Content -->
        <section class="container my-5">
            <?php if(isset($_GET['add']) && ($_GET['add'] != '0')){?> 
            
                <div class="alert alert-success" role="alert">
                    Ce produit a été ajouté à votre panier.
                </div> 
            <?php  
            }


            include ('./data/products.php') ?>

            <!-- Container row -->
                    <?php if(isset($_GET['categorie'])){ ?>
            <section class="row">
                    
                    <!-- Colonne de gauche -->
                
                                <div class="col-lg-3">
                        <h1 class=>Produits</h1>
                        <div class="list-group my-4">
                            <a href="produits.php?current=Produits&amp;categorie=Alimentaire" class="list-group-item <?php if (isset($_GET['categorie']) && $_GET['categorie'] == 'Alimentaire' ) { echo 'active';} ?>">Alimentaire</a>
                            <a href="produits.php?current=Produits&amp;categorie=Cosmetique" class="list-group-item <?php if (isset($_GET['categorie']) && $_GET['categorie'] == 'Cosmetique' ) { echo 'active';} ?>">Cosmétique</a>
                            <a href="produits.php?current=Produits&amp;categorie=BDs" class="list-group-item <?php if (isset($_GET['categorie']) && $_GET['categorie'] == 'BDs' ) { echo 'active';} ?>">Bande dessinnées</a>
                        </div>
                    </div>
            

                    <!-- Colone de droite détail des info -->

                <div class="col-lg-8 border rounded">
                        
                            <!-- Card 1 -->
                        <?php
                            // détermine quelle catégorie à afficher
                                $categories = $products[$_GET['categorie']];
                            ?>    
                            <div class="card-body">
                                            
                                <?php foreach($categories as $produit): ?>
                                    <a href="produits.php?product=<?= $produit['id']?>"><h3 class="card-title"> 
                                    <?= $produit['name']?>
                                    </h3></a>
                                    
                                    <p class="card-text"> <?= $produit['description'] ?> </p>

                                    <a href="produits.php?current=Produits&amp;categorie=Alimentaire&amp;add=<?= $produit['id']?>">
                                    <button type="button" class="btn btn-success mb-5">Ajouter au panier</button>
                                    </a>
                                    
                                <?php endforeach; ?> 
                                
                            </div>

                        <?php } else if(isset($_GET['product'])){
                
                            // boucle pour afficher les avis
                        // boucle pour aller dans le premier tableau
                        foreach($products as $categories):
                        // boucle pour determiner sur quel produit on souhaite voir l'avis
                            for ($i = 0 ; $i < count($categories); $i++){
                                $produit = $categories[$i] ;
                                if ($produit['id'] == $_GET['product']){ ?>
                            
                                    <p class="text-right"><a href="produits.php?categorie=Alimentaire"> Retour à la page produit</a>
                                    </p>
                                    <h3 class="card-title"><?= $produit['name']?></h3>
                                    
                                    <div class="card-body"> 
                                        
                                        <?php
                                        // vérification de si un avis existe   
                                        if(isset($produit['avis'])){
                                            
                                            $avis = $produit['avis']; 

                                            foreach($avis as $av): 
                                                                        
                                            ?>
                                            <!-- boucle qui affiche le contenu des avis sous forme de carte  -->
                                            <div class ="card-body bg-light my-2 rounded">
                                                <p> <?= $av['text'] ;?></p>
                                                <p class="text-right"> <?= $av['author'] ;?></p>
                                                <p class="text-right"> <?= $av['date'] ;?></p>
                                            </div>               
                                            <?php
                                            endforeach ; 
                                    
                                        }else{ ?>
                                            <!-- Si aucun avis n'a été posté ou n'existe dans le tableau-->

                                            <div class ="card-body bg-light my-2 rounded">
                                                <p>Pas encore d'avis pour ce produit. Souhaitez vous en laisser un? </p>
                                            </div>               
                                        <?php
                                        } ?> 
                                    
                                    </div>

                                <!-- affiche le bouton commander l'article -->

                                <a href="produits.php?current=Produits&amp;product=<?= $produit['id']?>&amp;add=<?= $produit['id']?>">
                                    <button type="button" class="btn btn-success mb-5">Ajouter au panier</button>
                                    </a>

                                    <?php 
                                    
                                   
                                }
                            }            
                        endforeach; 
                    } 
                    
                                 
                    ?>

          
                </div>
            </section>
        </section>
            <?php include ('footer.php') ; ?>
    </body>
</html>