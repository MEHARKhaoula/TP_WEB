<?php

require_once("../views/home_view.php") ;
$c= new HomeView() ;
$c->entetepage();
$c->afficher_menu();
$c->afficher_annonces();


?>