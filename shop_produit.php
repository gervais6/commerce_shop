<?php
require("shop_config/shop_commandes.php");
      
    $produits=afficher();
    if(isset($_GET['pdt']))
    {
      if(!empty($_GET['pdt']) or is_numeric(['pdt']))
      {
         $id=$_GET['pdt'];
      }
    }
   

?>

 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../boostrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet"/>
    <link rel="icon" href="shop_images/logo.png"/>

   <title>Produit</title>

<style>
 .bd-placeholder-img{
   font-size:1.125rem;
   text-anchor:middle;
   -webkit-user-select: none;
   -moz-user-select: none;
   user-select: none;
 } 

 @media(min-width:768px){
   .bd-placeholder-img-lg{
      font-size: 3.5rem;
   }




    .footer ul{
  margin-left: -39px;
}

.footer{
  font-size: 1rem;
  font-family: sans-serif;
  color: black;
  


}




.footer ul li a{
  color:black ;
  font-size:2.2vh;
  text-decoration: none;
  font-weight: bold;

}
.col-heading{
  font-size: 3vh;




}
 }







</style>

 </head>
 <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
         <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
               <h4 class="text-white">About</h4>
               <p class="text-muted">shop_shop...</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
               <h4 class="text-white">S'identifier</h4>
               <ul class="list-unstyled">
                  <li><a href="shop_login.php" class="text-white">Se connecter</a></li>
               </ul>
               </div>
               </div>
               </div>
               </div>
               <div class="navbar navbar-dark bg-dark shadow-sm">
                  <div class="container">
                     <a href="#" class="navbar-brand d-flex align-items-center ">
                        <strong><img src="shop_images/logo.PNG" width="70" height="70"></strong>
                     </a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                  </div>
               </div>
   </header>
   <main>

 
    <div class="album py-5 bg-light"  >

   <center> <div class="container" style="display: flex; justify-content:content:center"></center>
      
         <div class="row">

            <div class="col-md-2"></div>

            <?php foreach($produits as $produit){if($produit->id==$id){ ?>
              <div class="col-md-8">
                  <div class="card shadow-sm">
                     <h3 align="center"><?=$produit->nom?></h3>
                <center><img src="shop_images/<?= $produit->image_produit ?>" style="width:30% "></center>
                <div class="card-body">
                  <p class="card-text">
                     <?=$produit->description_produit ?></p>
                     <div class="d_flex_justify-content-between align-items-center">
                    <div class="btn-group">

                     <a href="shop_ajouter_panier.php?id=<?=$produit->id?>">
                        <button type="button" class="btn btn-outline-success">Ajouter au panier</button></a>
                     </div>
                     <small class="text" style="font-weight:bold;"><?=$produit->prix?> F CFA</small>
               </div>
              </div>
           </div>
                  
           </div>
      <?php }}?> 
      <div class="col-md-2"></div>


   </div>
     </div>
  </div>
  </main>
  <br><br>
 </body>
 <footer class="footer theme-bg-primary">
 <div class ="container py-5">
   <div class="row" style="margin-left:20px;">
     <div class="col-lg-3">
     <h4 class="col-heading">Contact</h4>
     <ul>

        <li><a href="">GMBOLO MARKET</a></li>
        <li><a href="">Call: +221 77 100 18 97</a></li>
        <li><a href="">Grand Dakar</a></li>

      </ul>
    </div>



        <div class="col-lg-3">
     <h4 class="col-heading">Nos services</h4>
     <ul>

        <li><a href="">Vente de produit electronique </a></li>
        <li><a href="">Vente de produit alimentaire </a></li>
        <li><a href="">Vente de produit cosmétique </a></li>
        <li><a href="">Vente de produit vestimentaire </a></li>
      

        </ul>
        </div>



        <div class="col-lg-3">
     <h4 class="col-heading">A propos</h4>
     <ul>

        <li><a href="qui sommes nous.php">Qui sommes-nous</a></li>
        <li><a href="CONDITIONS GENERALES DE VENTE.php">Conditions Générales<br> de vente</a></li>
        <li><a href="PROPRIETE INTELLECTUELLE.php">Propriété intellectuelle</a></li>

      </ul>
       </div>


    <div class="col-lg-3">
     <h4 class="col-heading">La société</h4>
     <ul>

        <li><a href="">Blog</a></li>
        <li><a href="">FAQs</a></li>
        <li><a href="">Licence</a></li>

      </ul>
    </div>


    <div class="col-lg-3">
     <h4 class="col-heading">Rester connecté</h4>
     <ul class="social-list">
       <li class="list-inline-item">
          <a href="https://www.facebook.com//">
              <img src="shop_images/facebook.PNG" width="50" height="50" alt="" class="ios">
          </a>
        </li>



         <li class="list-inline-item">
          <a href="">
            <img src="shop_images/youtube.png" width="50" height="50" alt="" class="ios">
          </a>
        </li>



         <li class="list-inline-item">
          <a href="">
               <img src="shop_images/whatsapp.png" width="50" height="50" alt="" class="ios">
          </a>
        </li>


        <li class="list-inline-item">
          <a href="">
               <img src="shop_images/twitter.png" width="50" height="50" alt="" class="ios">
          </a>
        </li>





         


        </ul>
     </div>


      <div class="mb-2">
        
        GMBOLO MARKET<br>
        Grand Dakar
      </div>
      <div class="text-white">
        <a href="mailto:Infos@opportunityofsucces.com">Infos@Gmbolomarket.com</a>
      </div>
    </div>

<div class="container">
  <hr>
</div>
<div>

<div class="footer-bottom text-center pb-5">
  <small class="copyright">
    © copyright 2023. Rights Reserved GMBOLO MARKET
  </small>
</div>

</footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
 </html>