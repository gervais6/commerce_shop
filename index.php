<?php
$con=mysqli_connect("localhost","root","","commerce_she");
if(!$con) die('Erreur :' .mysqli_connect_error());


if(!isset($_SESSION)){
   session_start();
}

if(!isset($_SESSION['panier'])){
   $_SESSION['panier']=array();

}
require("shop_config/shop_commandes.php");
$produits=afficher();


?>


<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../boostrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link href="../fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="stylesheet" href="css.css">
<link rel="icon" href="Search-Scool-color (2).webp">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting.css" />
<link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting-cells.css" />
<link rel="icon" href="shop_images/logo.png"/>



    
   <title>Gmbolo market</title>
   <style>
      .footer ul{
  margin-left: -39px;
}

.footer{
  font-size: 1rem;
  font-family: sans-serif;
  color: black;
  border-top:1px solid green;


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

Comment créer des détails de produit en utilisant HTML, CSS et JavaScriptComment créer des détails de produit en utilisant HTML, CSS et JavaScript


   
   </style>
</head>
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            
            whatsapp: "+221 771001897", // WhatsApp number
            call_to_action: "Contactez-nous", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "whatsapp", // Order of buttons
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<body>
   <header>
      <div class="collapse bg-dark" id="navbarHeader" >
         <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
               <h4 class="text-white">About</h4>
               <p class="text-muted">shop_shop...............</p>
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
                     <div class="btn-group">
   <a href="shop_panier.php"><img src="shop_images/icons8-caddie-80.png" style=width:50px;>
      <small class="text"
        style="position:absolute;
                 top:-9px;
                 right:-9px;
                 background-color:red;
                 height:20px;
                 width:20px;
                 display:flex;
                 align-items:center;
                 justify-content: center;
                 border-radius:50%;
                 font-size:12px;
                 color:#fff;"

                 >


      <?= array_sum($_SESSION['panier'])?>
         
      </small>
   </a>


   </div>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                  </div>
               </div>
   </header>

   

   <main>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    
    
    <div class="carousel-item active">
      <img src="shop_images/Gabon mbolo market.JPG" class="d-block w-100" alt="...">
    </div>

     
    
    

  </div>
</div>


       
  
      <div class="album py-5 bg-light  ">

         <div class="container   ">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
               <?php foreach($produits as $produit):?>
                  <div class="col">
                     <div class="card shadow-sm"> 
                
                       <h3 align="center"><?=$produit->nom ?></h3>
                       <center><img src="shop_images/<?= $produit->image_produit ?>" style="width :50%"></center>
                       <div class="card-body">
                          <p class="card-text"><?=substr($produit->description_produit,0,100);?>..</p>

                          <div class="d-flex justify-content-between align-items-center">
                             
                              <div class="btn-group">

                                 <a href="shop_produit.php?pdt=<?=$produit->id ?>"> 
                                    <button type="button" class="btn btn-sm btn-outline-success">voir plus </button></a>
                          </div>
                         <div class="btn-group">

                     <a href="shop_ajouter_panier.php?id=<?=$produit->id ?>">
                        <button type="button" class="btn btn-sm btn-outline-success">Ajouter au panier</button></a>
                     </div> 
                         <small class="text" style="font-weight: bold;"><?=$produit->prix ?>F CFA</small>
                       </div>
                  </div>
               </div>
                 </div>
          

            <?php  endforeach;?>
      </div>
   </div>

   
</div>

</div>


   </main>



  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    
    
    <div class="carousel-item active">
      <img src="shop_images/Banner GMM.JPG" class="d-block w-100" alt="...">
    </div>
    

  </div>
</div>


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

        
        <li><a href="">Vente de produit alimentaire </a></li>
        <li><a href="">Vente de produit cosmétique </a></li>
        
      

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
     <h4 class="col-heading">Supérette</h4>
     <ul>

        <li><a href="">Courses en ligne à Dakar. Livraison à domicile . Epicerie, fruits, légumes, viande, produits hygiène et beauté, boissons, épicerie. Livraison en express sur Dakar. Gmbolomarket.sn, votre Supérette en ligne</a></li>
        

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
<script src ="https://cdn.jsdelivr.net/npm/typelighterjs/typelighter.min.js"></script>

</html>