<?php
session_start();
require("../shop_config/shop_commandes.php ");

$Produits=afficher();
$nom="SHOP_ISS";

?>


<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../boostrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet"/>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <title>Supprimer</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar_light bg-light"> 
      <div class="container-fluid">
      <a class="navbar-brand" href="../">COMMERCE_SHOP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link"  aria-current="page" href="../shop_admin/shop_afficher.php">Produits</a>
            </li>

            <li class="nav-item">
               <a class="nav-link" aria-current="page" href="../shop_admin/">Nouveau</a>
            </li>
                 <li class="nav-item">
            <a class="nav-link active " style="font-weight:bold;color:green " href="shop_supprimer.php">Suppression</a></li>


         </ul>
    </div>
    <a class="btn btn-danger d-flex" style="display: flex; justify-content:flex-end;" href="shop_destroy.php">Deconnexion</a>
     </div>
     <div style="margin-right:600px">
        <h5 style="color:darksalmon;opacity:0.5;"><?=$nom?></h5>
    </div>

</nav>

   <div class="album py-5 bg-light">
      
<div class="container">
   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
   
   
   <form method="post">
      <div class="mb-3">
      <div class="mb-3">
         <label for="Input1" class="form-label">Identifiant du produit</label>
         <input type="number" class="form-control "name="idproduit"  required>

   
       </div>
 
      <button type="submit" name="valider" class="btn btn-success">Supprimer le produit</button>

  </form>
</div>
   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php foreach($Produits as $produit) : ?>
         <div class="col">
       <div class="card shadow-sm">
          <img src="../shop_images/<?= $produit->image_produit ?> ">
          <h3><?=$produit->id ?></h3>
          <div class="card-body">
      
       </div>
        </div>
         </div>


         <?php endforeach; ?>
      </div>
       </div>
        </div>
</body>
 


<?php

if(isset($_POST['valider']))
{
   if(isset($_POST['idproduit']))
   {
       if(!empty($_POST['idproduit']) AND is_numeric ($_POST['idproduit']))
       {
            $idproduit=htmlspecialchars(strip_tags($_POST['idproduit']));
              try
            {
               supprimer($idproduit);
               
            }
            catch (Exception $e)
            {
               $e->getMessage();
            }

       }
   }
   
}
  ?>