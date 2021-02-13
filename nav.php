<?php if (isset($_GET["add"]) && $_GET["add"] != 0){
    array_push($_SESSION['panier'], $_GET['add']);
                        
}else if(isset($_GET['commande']) && $_GET['commande'] == 1){
    $_SESSION['panier'] = [] ;  
}else if(isset($_GET['commande']) && $_GET['commande'] == 2){
    array_pop($_SESSION['panier']);
}  
?>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
            <a class="navbar-brand" href="accueil.php?current=Accueil">FreeShop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if (isset($_GET['current']) && $_GET['current'] == 'Accueil' ) { echo 'active';}; ?>">
                    <a class="nav-link" href="accueil.php?current=Accueil">Accueil
                    <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item <?php if (isset($_GET['current']) && $_GET['current'] == 'Panier' ) { echo 'active';}; ?>">
                    <a class="nav-link" href="panier.php?current=Panier">Panier <span class = "badge bg-secondary active"> <?= count($_SESSION['panier']) ?> </span></a>
                </li>
                <li class="nav-item <?php if (isset($_GET['current']) && $_GET['current'] == 'Produits' ) { echo 'active';}; ?>">
                    <a class="nav-link" href="produits.php?current=Produits&categorie=Alimentaire">Produits</a>
                </li>
                <li class="nav-item <?php if (isset($_GET['current']) && $_GET['current'] == 'Profil' ) { echo 'active';}; ?>">
                    <a class="nav-link" href="profil.php?current=Profil">Profil</a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link btn btn-danger p-2 text-center" href="index.php?disconnected=1">Déconnexion</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>