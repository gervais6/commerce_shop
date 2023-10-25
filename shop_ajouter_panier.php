<?php
$con=mysqli_connect("localhost","root","","commerce_she");
if(!$con) die('Erreur :' .mysqli_connect_error());


if(!isset($_SESSION)){
   session_start();
}

if(!isset($_SESSION['panier'])){
   $_SESSION['panier']=array();

}
   if(isset($_GET['id'])){
      $id=$_GET['id'];
      $produit=mysqli_query($con,"SELECT * FROM eshop_produits WHERE id=$id");
      if(empty(mysqli_fetch_assoc($produit))){
         die("Ce produit n'existe pas");
      }
      if(empty($produit)){
         die("Ce produit n'existe pas");
      }

      if(isset($_SESSION['panier'][$id])){
         $_SESSION['panier'][$id]++;
      }else{
         $_SESSION['panier'][$id]=1;
      }
      header("Location:index.php");
   

}



?>