<?php
function afficher()
{


	if (require("shop_connexion.php"))
		
       
		$req=$access->prepare("SELECT * FROM eshop_produits ORDER BY id DESC");

	     $req->execute();
	     $data=$req->fetchAll(PDO::FETCH_OBJ);
	     return $data;
	     $req->closeCursor();
 }
	

function afficherUnproduit($id)
{


	if (require("../shop_config/shop_connexion.php"))
		

		$req=$access->prepare("SELECT * FROM eshop_produits WHERE id= ?");

	     $req->execute(array($id));
	     $data=$req->fetchAll(PDO::FETCH_OBJ);
	     return $data;
	     $req->closeCursor();
	    
	}



function modifier($image,$nom,$prix,$description,$id)
 {


	if (require("../shop_config/shop_connexion.php"))
	
		

		$req=$access->prepare("UPDATE eshop_produits SET image_produit=? ,nom=?,prix=?,description_produit=? WHERE id=?");

	     $req->execute(array($image,$nom,$prix,$description,$id));
	     
	     $req->closeCursor();
	 

	
 }


 function ajouter($image,$nom,$prix,$description)
 {


	if (require("../shop_config/shop_connexion.php"))
	
		

		$req=$access->prepare("INSERT INTO eshop_produits(image_produit ,nom,prix,description_produit) VALUES (?,?,?,?)");

	     $req->execute(array($image,$nom,$prix,$description));
	     
	     $req->closeCursor();
	 

	
 }


 function supprimer($id)
{


	if (require("../shop_config/shop_connexion.php"))
		

		$req=$access->prepare("DELETE FROM eshop_produits WHERE id=?");

	     $req->execute(array($id));
	     
	     
	     $req->closeCursor();
	    
	}


	function getAdmin($login,$motdepasse)
	{
      if(require("shop_connexion.php"))
      {
      	$req=$access->prepare("SELECT * FROM shop_admin WHERE id=1");
      	$req->execute();
        if($req->rowCount()==1)
        {
        	$data=$req->fetchAll(PDO:: FETCH_OBJ);
        	foreach($data as $i)
        	{
               $mail=$i->email;
               $mdp=$i->motdepasse;
        	}
        	if($mail==$login AND $motdepasse)
        	{
        		return $data;
        	}
        	else{
        		return false;
        	}
        }
      }
	}
	
	
?>