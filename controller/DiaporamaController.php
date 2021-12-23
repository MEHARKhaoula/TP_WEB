<?php
require_once('../models/diaporama.php');
class DiaporamaController
{
    public function get_diaporama_controller()
    {
        $mtf=new DiaporamaModel() ;
        $r=$mtf->get_diaporama_model();
        return $r;
    }
}
?>