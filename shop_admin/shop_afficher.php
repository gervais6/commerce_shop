<?php
session_start();
if(!isset($_SESSION['gabon1996']))

 {
   header("Location:../shop_login.php");
}

if (empty($_SESSION['gabon1996']))
 {
   header("Location:../shop_login.php");
}

require("../shop_config/shop_commandes.php");
		
    $produits=afficher();
    foreach($_SESSION['gabon1996'] as $i){
      $nom=$i->pseudo;
      $email=$i->email;
    }
	

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="../boostrap/css/bootstrap.min.css" rel="stylesheet">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 	<link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet"/>
 	<title>Tous les produits</title>
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
    				<a class="nav-link active" style="font-weight:bold;" aria-current="page" href="../shop_admin/shop_afficher.php">Produits</a>
    			</li>

    			<li class="nav-item">
    				<a class="nav-link" aria-current="page" href="../shop_admin/">Nouveau</a>
    			</li>
                 <li class="nav-item">
    			<a class="nav-link" href="shop_supprimer.php">Suppression</a></li>
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
    	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
    		<table class="table">
    			<thead>
    				<tr>
    					<th scope="col">#</th>
    					<th scope="col">image</th>
    					<th scope="col">nom</th>
    					<th scope="col">Prix(XOF)</th>
    					<th scope="col">Description</th>
    					<th scope="col">Editer</th>



    				</tr>
    			</thead>
    			<?php foreach($produits as $produit): ?>
    				<tr><th scope ="row"><?= $produit->id ?></th>


    					<td>
    						

    						<img src="../shop_images/<?= $produit->image_produit ?>" style="width:20%">
    					</td>
    					<td>
    						<?=$produit->nom ?>
    					</td>

    					<td style="font-weight:bold;color:green;"><?=$produit->prix?></td>
    					<td>
    						<?= substr($produit->description_produit,0,100) ?>...
    					</td>
    					<td><a href="shop_editer.php?id=<?=$produit->id?>"><i class="fa fa-pencil" style="font-size: 30px;"></i></a></td>

    				</tr>
    			<?php endforeach;?> 
    			
                


    			
    		</table>
    </div>
     </div>
 </body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
 </html>