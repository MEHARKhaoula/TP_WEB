<?php
require_once('../controller/AnnonceController.php');
Class AnnonceView
{
    public function afficher_annonces()
{


    $cf= new AnnonceController() ;
    $qtf=$cf->get_annonces_controller();
   
    $i=0;
      echo'<div class="parent">';
      while ($row = $qtf->fetch(PDO::FETCH_ASSOC) ) 
      {
        $link="../images/".$row['img'];
      
        if($i < 4)
        {
          echo '<div class="child">';
          echo '<h2>'.$row['titre'].'</h2>';
          echo '<img class="ann" src='.$link.">";
     
          echo '<p class="annonce">'.$row['description']."</p>";
          echo '<a href="#" class="readmore">Read More</a>'; 
          echo '</div>';
         
        }
        else{
          exit();
        }
        $i++;
      }
      echo'</div>' ;
      echo $i ;     
   

   
    
}

   
}
?>
