<!--<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet"  type="text/css" href="menu.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>




  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="menus.css">
</head>
<body>
  <main>
      <h1>Diaporama</h1>

   
      <div class="diapo">
         
          <div class="elements">
       
              <div class="element active">
                  <img src="1.jpg" alt="Image 1">
                  <div class="caption">
                      <h2>Image 1</h2>
                      
                  </div>
              </div>
              
              <div class="element">
                  <img src="2.jpg" alt="Image 2">
                  <div class="caption">
                      <h2>Image 2</h2>
                      
                  </div>
              </div>
            
              <div class="element">
                  <img src="3.jpg" alt="Image 3">
                  <div class="caption">
                      <h2>Image 3</h2>
                      
                  </div>
              </div>
             
              <div class="element">
                  <img src="2.jpg" alt="Image 2" >
                  <div class="caption">
                      <h2>Image 4</h2>
                     
                  </div>
              </div>
          </div>
          
          <i id="nav-gauche" class="las la-chevron-left"></i>
          <i id="nav-droite" class="las la-chevron-right"></i>
      </div>
  </main>
  
  <script src="code.js"></script>







<nav>
  <ul>
    <li><a href="#">Accueil</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">Présentation</a></li>
    <li><a href="#">A propos</a></li>
  </ul>
</nav>



</body>

</html> 
-->


<?php
require_once("AnnoceView.php") ;
$c= new AnnonceView() ;
$c->afficher_annonces();
?>