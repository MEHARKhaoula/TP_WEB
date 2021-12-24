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


public  function rechercher()
{
  ?>
  <form action="" method="post" >
      <label for="d">Wilaya de départ:</label><br>
        <input type="text" name="d"  /><br>
        <label for="a">Wilaya darrive:</label><br>
        <input type="text" name="a"  /><br>
        <input type="submit" value="Rechercher" name="rech"/>
        
          <?php
if (isset($_POST['rech'])  )
 {
 
  $depart= $_POST['d'];
  $arriv=$_POST['a'];
  $c= new AnnonceController();
  $res=$c->get_annonce_recherche_controller($depart,$arriv);
  $i=0;
  
 if(!is_bool($res))
  {
    echo'<div class="container">';
  while ($row = $res->fetch(PDO::FETCH_ASSOC) ) 
  {
    echo"je suis execute";
    $i++;
    $link="../images/".$row['img'];
  
    if($i < 5)
    {
      echo '<div class="card">';
      echo '<img class="ann" src='.$link.">";
      echo '<h2 class="titre">'.$row['titre'].'</h2>';
      echo '<p class="card__body">'.$row['description']."</p>";
      echo '<button  class="tag-blue tag" >Lire la suite</button>'; 
      echo '</div>';
     
    }
    else{
      
     
    $i=0;

  
  }
 

}

echo '</div>' ;
  }
}
}

   
}
?>
