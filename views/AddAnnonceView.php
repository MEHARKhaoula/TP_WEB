<?php

class AddAnnonceView
{
    public function entetepage()
{
  
    
  echo'  <html>
    <head>
      <link rel="stylesheet"  type="text/css" href="../menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>';
     
}

public function afficher_form()
    {
        
     echo' <form action="controller/AddAnnonceController.php" method="Post" enctype="multipart/form-data">
      <label for="titre">Titre:</label><br>
        <input type="text" name="titre" placeholder="titre" /><br>
        <label for="description">Description:</label><br>
        <input type="text" name="description" placeholder="description" /><br>
        <label for="adressed">Adresse Depart:</label><br>
        <input type="text" name="adressed"  /> <br>
        <label for="depart">Depart:</label><br>
        <SELECT name="depart" size="1"> 
        <OPTION>Adrar
        <OPTION>Chlef
        <OPTION>Laghouat
        <OPTION>Oum El Bouaghi
        <OPTION>Batna
        <OPTION>Bejaia
        <OPTION>Biskra
        <OPTION>Bechar
        <OPTION>Blida
        <OPTION>Bouira
        </SELECT><br>
        <label for="adressea">Adresse arrivée:</label><br>
        <input type="text" name="adressea"  /> <br>
        <label for="arrive">Arrivee:</label><br>
        <SELECT name="arrive" size="1"> 
        <OPTION>Adrar
        <OPTION>Chlef
        <OPTION>Laghouat
        <OPTION>Oum El Bouaghi
        <OPTION>Batna
        <OPTION>Bejaia
        <OPTION>Biskra
        <OPTION>Bechar
        <OPTION>Blida
        <OPTION>Bouira
        </SELECT><br>
        <label for="type">Type transport:</label><br>
        <SELECT name="type" size="1">
        <OPTION>colis
        <OPTION>demenagement
        <OPTION>lettre
       
        </SELECT><br>
        <label for="moyen">Moyen transport:</label><br>
        <SELECT name="moyen" size="1">
        <OPTION>voiture
        <OPTION>camion
        <OPTION>bus
        </SELECT><br>

        <label for="poids">Poids:</label><br>
        <SELECT name="poids" size="1">
        <OPTION> categorie1
        <OPTION>categorie2
        <OPTION>categorie3
        </SELECT><br>

        <label for="volume">Poids:</label><br>
        <SELECT name="volume" size="1">
        <OPTION> categorie1
        <OPTION>categorie2
        <OPTION>categorie3
        </SELECT><br>

        <input type="file" name="uploadfile" value=""/> <br>

        <input type="submit" value="Publier" />
</form>
</body>';
    }
}

    ?>