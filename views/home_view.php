<?php
require_once("../views/AnnonceView.php") ;
require_once("../controller/DiaporamaController.php") ;
class HomeView {
    

public function entetepage()
{
  
    
  echo'  <html>
    <head>
      <link rel="stylesheet"  type="text/css" href="../diaporama.css">
      <link rel="stylesheet"  type="text/css" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>';
     
}

public function rechercher()
{
  $c= new AnnonceView() ;
  $c->rechercher() ;
}

   public function afficher_Diaporama()
    {
        $cf= new DiaporamaController() ;
        $qtf=$cf->get_diaporama_controller();
       
       
        echo'<div class="slideshow-container">';
        while ($row = $qtf->fetch(PDO::FETCH_ASSOC) ) 
        {
         $link="../images/diaporamas/".$row['img'];
           
        echo' <div class="mySlides fade">
         <div class="numbertext">1 / 3</div>
         <img src='.$link.' style="width:100%">
         <div class="text">Caption Text</div>
       </div>';
             
            
           
            
        } 

        echo '</div>';
        
      echo  '<div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>';
      echo'<script>
      var slideIndex = 0;
      showSlides();
      
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
      </script>';
     
        
    }
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



