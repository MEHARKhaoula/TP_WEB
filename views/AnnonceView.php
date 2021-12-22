<?php
Class AnnonceView
{
    public function afficher_annonces() {
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet"  type="text/css" href="menu.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
try{
    $cf= new AnnonceController() ;
    $qtf=$cf->get_annonces_controller();
    $size = $qtf->fetch(PDO::FETCH_ASSOC)["Data_length"];
    $i=0;

      echo'<div class="parent">';
      while ($row=$qtf->fetch() && $i<4) 
      {
        echo '<div class="child"><h2>.$row['titre'].</h2><img src=".$row['img']." alt="" /><p>.$row['description'].</p><a href="#" class="readmore">Read More</a> </div>';
      }
      echo'</div>'      
    }

   
    
}
?>
    }
}
</body>