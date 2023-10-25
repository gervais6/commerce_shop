<?php
session_start();
if(isset($_SESSION['gabon1996'])){

   $_SESSION['gabon1996']=array();
   session_destroy();
   header("Location:../index.php");
   
}





?>