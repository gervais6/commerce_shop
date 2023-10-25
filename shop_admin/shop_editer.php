<?php
session_start();
require("../shop_config/shop_commandes.php ");
$id=$_GET['id'];
$leProduit=afficherUnproduit($id);
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
   <title>Modification</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar_light bg-light"> <div class="container-fluid">
      <a class="navbar-brand" href="../">COMMERCE_SHOP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="shop_supprimer.php">Suppression</a></li>
            <li class="nav-item">
            <a class="nav-link active" style="font-weight: bold; color: green" href=" ">Modification</a></li>
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
   
   <?php foreach($leProduit as 
      $produit): ?>
   <form method="post">
      <div class="mb-3">
         <label for="Input1" class="form-label">L'image du produit</label>
         <input type="name" class="form-control "name="image_produit" value="<?=$produit->image_produit ?>" required>

      </div>
 <div class="mb-3">
         <label for="Input2" class="form-label">Nom du produit</label>
         <input type="text" class="form-control " name="nom" value="<?=$produit->nom ?>" required>

      </div>
       <div class="mb-3">
         <label for="Input2" class="form-label">Prix du produit</label>
         <input type="number" class="form-control "name="prix" value="<?=$produit->prix ?>" required>

      </div>
       <div class="mb-3">
         <label for="Input2" class="form-label">Description du produit</label>
         <textarea  class="form-control "name="description_produit" required><?=$produit->description_produit ?></textarea>

      </div>
      <button type="submit" name="valider" class="btn btn-success">Enregistrer</button>




  </form>
<?php endforeach ; ?>
</div>
</div>
</div>
</body>
 
</html>
<?php
if(isset($_POST['valider']))
{
   if(isset($_POST['image_produit']) AND isset($_POST['nom'])AND isset($_POST['prix'])AND isset($_POST['description_produit']))
   {
       if(!empty($_POST['image_produit']) AND !empty($_POST['nom'])AND !empty($_POST['prix'])AND !empty($_POST['description_produit']))
       {
            $image=htmlspecialchars(strip_tags($_POST['image_produit']));
            $nom=htmlspecialchars(strip_tags($_POST['nom']));
            $prix=htmlspecialchars(strip_tags($_POST['prix']));
            $description=htmlspecialchars(strip_tags($_POST['description_produit']));
            if(isset($_GET['id']))
            {
               if(!empty($_GET['id']) OR is_numeric($_GET['id'])) 
               {
                  $id = $_GET['id'];  
               }
            }
            try
            {
               modifier($image,$nom,$prix,$description,$id);
               header('location:shop_afficher.php');
            }
            catch (Exception $e)
            {
               $e->getMessage();
            }

       }
   }
}


?>