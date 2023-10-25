<?php  $con=mysqli_connect("localhost","root","","commerce_she");    
session_start();
 ?>



<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="shop_images/GMM_Market_SansFond.png"/>
   <link href="../boostrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   <title>Validation de la commande</title>
   <style>
      
      *{
      margin:0px;
      font-size: 16px;
    }


      p{
         margin-left:50px;
         margin-right:50px ;
         text-align: justify;
         font-size:14px;
         
               }

    strong{
      text-decoration: underline;
    }


    header{
      background-color: green;
      padding: 20px;
      color: white;
      
    }

     .footer ul{
  margin-left: -39px;
}

.footer{
  font-size: 1rem;
  font-family: sans-serif;
  color: black;
  border-top: 1px solid green;
  


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

.form-signup{
   margin: 0auto;
   max-width: 400px;
}

   </style>
</head>
<body>
<header>VALIDATION DE LA COMMANDE</header> <br><br><br><br>

<div class="container">
   <form class="form-signup" action="commande.php" method="post">
      <h2>Expédition</h2>
      <p> </p>
      <div class="form-group">
         <div class="row">
         <div class="col-md-6">
             <input type="text" class= "form-control" name="user_prenom" placeholder="prenom">
         </div>
<br><br>
          <div class="col-md-6">
             <input type="text" class= "form-control" name="user_name" placeholder="nom">
         </div>
      </div>
        </div>
      <div class="form-group">
         <br>
         <input type="email"  class= "form-control"  placeholder="email Address"name="user_email">
</div>
<div class="form-group">
   <br>
         <input type="tel" class= "form-control" name=" user_telephone" placeholder=" téléphone">
</div>
<div class="form-group">
   <br>
   <input type="text"  class= "form-control" name="user_address" placeholder="Address de livraison">
</div>
<br>

<br>
<input type="submit" class="btn btn-success btn-block" name="submit" value="Envoyer">
<?php



  


if(isset($_POST['submit']))
   {                                                                          
    $name= htmlentities(trim($_POST['user_name']));
    $email= htmlentities(trim($_POST['user_email']));
    
    $telephone= htmlentities(trim($_POST['user_telephone']));
    $address= htmlentities(trim($_POST['user_address']));
    $prenom= htmlentities(trim($_POST['user_prenom']));
    $order_cost= $_SESSION['total'];
    $order_status= "on_hold";
    $order_id= 1;
    $order_date = date('Y-m-d M:i:s');

    
   
    
    
         if(!empty($_POST['user_name'])&& !empty($_POST['user_email'])&& !empty($_POST['user_telephone'])&& !empty($_POST['user_address'])&& !empty($_POST['user_prenom']));


       
         $Pseudolength=strlen($name);
        
            
                  $stmt = $con->prepare("INSERT INTO commande (user_name,user_email,user_telephone,user_address,user_prenom,order_cost,order_status,order_date,order_id) VALUES(?,?,?,?,?,?,?,?)");

                    $stmt->bind_param('"sissssssiiiissssssisssi"',$_POST[$name],$_POST[$email],$_POST[$telephone],$_POST[$address],$_POST[$prenom],$_POST[$order_cost],$_POST[$order_status],$_POST[$order_date],$_POST[$order_id]); 

                    $stmt->execute();

                    $order_id = $stmt->insert_id;
                    

                    echo $order_id;




                  

                   $erreur="<center><big>Vos informations ont été envoyées!</big></center>";
     }

     else 

     {
       $erreur="<center><big>Tous les champs doivent être complétés !</big></center>";
     }
    
?> 
   </form>
   <?php
if(isset($erreur))
{
  echo$erreur;
}

?>
</div>

</body>
<br><br><br>
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
          <a href="https://www.facebook.com/Sophosnephros/">
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
        <a href="mailto:Infos@opportunityofsucces.com">Infos@gmbolomarket.com</a>
      </div>
    </div>


<div class="container">
  <hr>
</div>


<div class="footer-bottom text-center pb-5">
  <small class="copyright">
    © copyright 2023. Rights Reserved GMBOLO MARKET
  </small>
</div>


</footer>
<script src ="https://cdn.jsdelivr.net/npm/typelighterjs/typelighter.min.js"></script>
</html>