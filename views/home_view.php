<?php
require_once("../views/AnnonceView.php") ;
require_once("../controller/DiaporamaController.php") ;
class HomeView {
    

public function entetepage()
{
  
    
  echo'  <html>
    <head>
      <link rel="stylesheet"  type="text/css" href="../menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>';
     
}



  /*  public function afficher_Diaporama()
    {
        
      
      echo '<main>
        <div class="diapo">
        <div class="elements">';
       
        $cf= new DiaporamaController() ;
        $qtf=$cf->get_diaporama_controller();
       
        $i=1;
        while ($row = $qtf->fetch(PDO::FETCH_ASSOC) ) 
        {
         $link="../images/".$row['img'];
            if($i==1)
            {
                echo  '<div class="element active">';
                echo "<img src=".$link.">";
                echo  '</div>';
            }
            else
            {
                echo  '<div class="element">';
                echo "<img src=".$link.">";
                echo '</div>';

            }
            $i++;
        } 
        
         
      
     
         echo'</div><i id="nav-gauche" class="las la-chevron-left"></i>
          <i id="nav-droite" class="las la-chevron-right"></i>
      </div>
  </main>';
 
    }*/
    public function afficher_annonces()
    {
        $c= new AnnonceView() ;
        $c->afficher_annonces();
       
    } 
    public function afficher_menu()
    {
    
       echo' <nav>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Présentation</a></li>
          <li><a href="#">A propos</a></li>
        </ul>
      </nav>';
     
      
    }
   

    public function afficher_formulaire()
    {
      $c= new AddAnnonceView() ;
     
      $c->afficher_form();
      echo'</body>

      </html>';
    }
   




}



