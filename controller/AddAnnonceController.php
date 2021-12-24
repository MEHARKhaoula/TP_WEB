<?php

require_once("../views/AddAnnonceView.php") ;
require_once("../models/Annonce.php") ;
class AddAnnonceController{

public function envoyer_form()
    {
        $action=$_POST['submit']; 

		if ($action=='submit')
		{
			
            $titr=$_POST['titre'];
            $desc=$_POST['description'];
            $pointdepart =$_POST['adressed'];
            $pointarrive=$_POST['adressea'];
            $wilaya_depart=$_POST['depart'];
            $wilaya_arrive=$_POST['arrive'];
            $typetransport=$_POST['type'];
            $poids_inf=40;
            $poids_sup=60;
            $moyen_transport=$_POST['moyen'];
            $etat="valide" ;
            $volume_inf=20;
            $volume_sup=60;
            $filename = $_FILES["uploadfile"]["name"];
	        $tempname = $_FILES["uploadfile"]["tmp_name"];
            $folder = "../images/".$filename;	
            $img=$folder ;
            move_uploaded_file($tempname, $folder);
		    $c = new Annonce() ;
            $c->add($titr,$desc,$pointdepart,$pointarrive,$wilaya_depart,$wilaya_arrive,$typetransport,$poids_inf,$poids_sup,$moyen_transport,$etat,$volume_inf,$volume_sup,$img);
		
        
		
		
		}
		header('location: ../controller/HomeController.php');
    }
}
?>