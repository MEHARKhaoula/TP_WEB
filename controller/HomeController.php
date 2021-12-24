<?php

require_once("../views/home_view.php") ;
require_once("../views/AddAnnonceView.php") ;

$c= new HomeView() ;
$c->entetepage();
$c->afficher_annonces();
$c->afficher_menu();
$c->afficher_formulaire();


?>