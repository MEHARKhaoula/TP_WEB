<?php
require_once('../models/annonce.php');
require_once('../views/AnnonceView.php');
class AnnonceController
{
    public function get_annonces_controller()
    {
        $mtf=new Annonce() ;
        $r=$mtf->get_annonces_model();
        return $r;
    }

    public function get_annonce_controller($wilaya_depart,$wilaya_arrive) 
    {
        $mtf=new Annonce() ;
        $r=$mtf->get_annonces_model($wilaya_depart,$wilaya_arrive);
        return $r;
    }
}
?>