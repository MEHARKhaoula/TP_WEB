<?php

require_once("../controller/AddAnnonceController.php") ;
class AddAnnonceView
{
    public function entetepage()
{
  echo'<html>
    <head>
      <link rel="stylesheet"  type="text/css" href="../menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>';
     
}

public function afficher_form()
    {
        ?>
     <form action="" method="post" enctype="multipart/form-data">
      <label for="titre">Titre:</label><br>
        <input type="text" name="titre" placeholder="titre" /><br>
        <label for="description">Description:</label><br>
        <input type="text" name="description" placeholder="description" /><br>
        <label for="adressed">Adresse Depart:</label><br>
        <input type="text" name="adressed"  /> <br>
        <label for="depart">Depart:</label><br>
        <SELECT name="depart" size="1"> 
        <OPTION value="Adrar">Adrar
        <OPTION value="Chlef">Chlef
        <OPTION value="Laghouat">Laghouat
        <OPTION value="Oum El Bouaghi">Oum El Bouaghi
        <OPTION value="5">Batna
        <OPTION value="6">Bejaia
        <OPTION value="7">Biskra
        <OPTION value="8">Bechar
        <OPTION value="9">Blida
        <OPTION value="10">Bouira
        </SELECT><br>
        <label for="adressea">Adresse arrivée:</label><br>
        <input type="text" name="adressea"  /> <br>
        <label for="arrive">Arrivee:</label><br>
        <SELECT name="arrive" size="1"> 
        <OPTION value="1">Adrar
        <OPTION value="2">Chlef
        <OPTION value="3">Laghouat
        <OPTION value="4">Oum El Bouaghi
        <OPTION value="5">Batna
        <OPTION value="6">Bejaia
        <OPTION value="7">Biskra
        <OPTION value="8">Bechar
        <OPTION value="9">Blida
        <OPTION value="10">Bouira
        </SELECT><br>
        <label for="type">Type transport:</label><br>
        <SELECT name="type" size="1">
        <OPTION value="colis">colis
        <OPTION value="demenagement">demenagement
        <OPTION value="lettre">lettre
       
        </SELECT><br>
        <label for="moyen">Moyen transport:</label><br>
        <SELECT name="moyen" size="1">
        <OPTION value="voiture">voiture
        <OPTION value="camion">camion
        <OPTION value="bus">bus
        </SELECT><br>

        <label for="poids">Poids:</label><br>
        <SELECT name="poids" size="1">
        <OPTION value="1"> categorie1
        <OPTION value="2">categorie2
        <OPTION value="3"> categorie3
        </SELECT><br>

        <label for="volume">Poids:</label><br>
        <SELECT name="volume" size="1">
        <OPTION value="1"> categorie1
        <OPTION value="2">categorie2
        <OPTION value="3">categorie3
        </SELECT><br>

        <input type="file" name="uploadfile" value=""/> <br>

        <input type="submit" value="Publier" name="submit"/>
</form>
</body>
<?php
if (isset($_POST['submit'])) { 

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
  
  
  
  move_uploaded_file($tempname, $folder);
  $c = new Annonce() ;
  $c->add($titr,$desc,$pointdepart,$pointarrive,$wilaya_depart,$wilaya_arrive,$typetransport,$poids_inf,$poids_sup,$moyen_transport,$etat,$volume_inf,$volume_sup,$filename);
  
}
  } 
    public function envoyer(){
        $c = new AddAnnonceController();
        $c->envoyer_form() ;
    } 
    
}

    ?> 

   