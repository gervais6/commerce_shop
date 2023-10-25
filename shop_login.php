<?php

session_start();
require("shop_config/shop_commandes.php");
if(isset($_SESSION['gabon1996']))
{
   if(!empty($_SESSION['gabon1996'])) 
   {
      header("Location:shop_admin/shop_afficher.php");
   }
}


?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
   <title>shop_login</title>
</head>
<body>
   <br>
   <div class="container" style="display: flex; justify-content: start-end">
      <div class="row">
         <div class="col-md-10">
            <form method="post">
               <div class="mb-3">
                  <label for="email" class="form-label">Login</label>
                  <input type="email" name="email" class="form-control" style="width:350%;">
               </div>

               <div class="mb-3">
                  <label for="motdepasse" class="form-label">Login</label>
                  <input type="password" name="motdepasse" class="form-control" style="width:350%;">
               </div>
               <br>
               <input type="submit" name="envoyer" class="btn btn-info" value="Se connecter">

            </form>
         </div>
      </div>
 </div>
  
</body>
</html>
<?php
if(isset($_POST['envoyer']))
{
   if(!empty($_POST['email']) AND !empty($_POST['motdepasse']))
   {
      $login=htmlspecialchars(strip_tags($_POST['email']));
      $motdepasse=htmlspecialchars(strip_tags($_POST['motdepasse']));
      $admin=getAdmin($login,$motdepasse);
      if($admin)
      {
         $_SESSION['gabon1996']=$admin;
         header('Location:shop_admin/shop_afficher.php');
      }
      else
      {
        header('Location:index.php');
      }
   }
}



?>