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
}
?>