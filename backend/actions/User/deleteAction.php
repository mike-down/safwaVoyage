<?php
require_once '../../module/connection.php';
require_once '../../module/model/User/User.php';
	$id = (isset($_GET["id"]))?$_GET["id"]:"";
	if($id!=""){
		#suppression
		$model = new User();
		$resultat = $model->deleteUser($id);
		if($resultat){
			echo("Suppression reussie");
		}else{
			echo("Echec de suppression");
		}
        header("Location: ../../views/user/editer.php");
	}else{
		echo("Vous n'avez pas le droit d'acces a cette page !!");
		
	}
?>