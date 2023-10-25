<?php

session_start();

$con=mysqli_connect("localhost","root","","commerce_she");
if(!$con) die('Erreur :' .mysqli_connect_error());
if(isset($_GET['del'])) {
   $id_del=$_GET['del'];
   unset($_SESSION['panier'][$id_del]);
   
}



?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="shop_style.css">
    <link rel="icon" href="shop_images/logo.png"/>

   <title>Panier</title>
</head>

<body class="panier">
   <a href="index.php" class="link">Retour</a>
 <section>
    <table>
       <tr>
          <th></th>
          <th>Nom</th>
          <th>Prix</th>
          <th>Quantité</th>
          <th>Action</th>
       </tr>
       <?php
      $total=0;
      $ids=array_keys($_SESSION['panier']);
      if(empty($ids)){
         echo"votre panier est vide";
      }else{
         $products=mysqli_query($con,"SELECT *FROM eshop_produits WHERE id IN (".implode(',',$ids).")");
          foreach($products as $product): $total=$total+$product['prix']*$_SESSION['panier'][$product['id']];
   

       ?>

      
       <tr>
          
          <td>
             <img src="shop_images/<?=$product['image_produit']?>">
          </td>
           <td>
            
             <?=$product['nom']?>
          </td>
          <td>
             <?=$product['prix']?> F CFA
          </td>
          <td>
             <?=$_SESSION['panier'][$product['id']]?>

          </td>
          <td>
             <a href="shop_panier.php?del=<?=$product['id']?>"><img src="shop_images/icons8-supprimer-pour-toujours-48.png"></a>
          </td>
       </tr>
       <?php endforeach;} ?>
     </table>
    <table> 
    <tr class="total">
       <th>Quantité Total:<?=array_sum($_SESSION['panier']) ?></th>
       <th>Prix Total:<?=$total?> F CFA</th>
    </tr>
    </table>
 </section>
 <br>
<a href="commande.php" class="link" style="background-color:#E12C05; text-decoration: none;">Commander</a>       
 
</body>
</html>