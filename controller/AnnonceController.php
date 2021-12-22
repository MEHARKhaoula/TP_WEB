<?php
require_once('annonce.php');
require_once('AnnonceView.php');
class AnnonceController
{
    public function get_annonces_controller()
    {
        $mtf=new annonce_model() ;
        $r=$mtf->get_annonces_model();
        return $r;
    }
}
?>