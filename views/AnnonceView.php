<?php
require_once('../controller/AnnonceController.php');
Class AnnonceView
{
    public function afficher_annonces()
{


    $cf= new AnnonceController() ;
    $qtf=$cf->get_annonces_controller();
   
    $i=0;
      echo'<div class="container">';
      while ($row = $qtf->fetch(PDO::FETCH_ASSOC) ) 
      {
        $link="../images/".$row['img'];
      
        if($i < 4)
        {
          echo '<div class="card">';
          echo '<img class="ann" src='.$link.">";
          echo '<h2 class="titre">'.$row['titre'].'</h2>';
         
     
          echo '<p class="card__body">'.$row['description']."</p>";
          echo '<button  class="tag-blue tag" >Lire la suite</button>'; 
          echo '</div>';
         
        }
        else{
          if($i <= 7)
          {
            echo '<div class="card">';
            echo '<img class="ann" src='.$link.">";
            echo '<h2 class="titre">'.$row['titre'].'</h2>';
            echo '<p class="card__body">'.$row['description']."</p>";
            echo '<button  class="tag-blue tag" >Lire la suite</button>'; 
            echo '</div>';
          }
        
else{
  break;
}
        }
        $i++;
      }
      echo'</div>' ;
      echo $i ;     
   

   
    
}

   
}
?>
