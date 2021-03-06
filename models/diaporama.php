<?php
class DiaporamaModel{

   private $dbname="esitransport"; 
   private $host="127.0.0.1";
   private $user="root";
   private $password="";

   private function connexion($dbname,$host,$user,$password)
   {
       $dsn="mysql:dbname=$dbname; host=$host;";
       try{
           $c =new PDO($dsn,$user,$password);

       }
       catch(PDOException $ex)
       {
           printf("erreur de connexion à la base de données",$ex->getMessage()) ;
           exit();

       }
       return $c;
   }

   private function deconnexion(&$c)
   {
       $c=null;
   }

   private function requete($c,$r)
   {
       return $c->query($r) ;
   }
   public function get_diaporama_model()
   {
       $c=$this->connexion("esitransport","127.0.0.1","root","");
       $qf="select * from diaporama";
       $r=$this->requete($c,$qf);
       $this->deconnexion($c);
       return $r;
   } 
}  
?>
