<?php
class Annonce{

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

public function get_annonces_model()
{
    $c=$this->connexion("esitransport","127.0.0.1","root","");
    $qf="select * from annonce";
    $r=$this->requete($c,$qf);
    $this->deconnexion($c);
    return $r;
}


public function get_annonce_model($wilaya_depart,$wilaya_arrive)
{
    $c=$this->connexion("esitransport","127.0.0.1","root","");
    $qf="select * from annonce where wilaya_depart=".$wilaya_depart."and wilaya_arrive=".$wilaya_arrive.";";
    $r=this->requete($c,$qf);
    $this->deconnexion($c);
    return $r;
}
public function add($titr,$desc,$pointdepart,$pointarrive,$wilaya_depart,$wilaya_arrive,$typetransport,$poids_inf,$poids_sup,$moyen_transport,$etat,$volume_inf,$volume_sup,$img)
{
    $c=$this->connexion("esitransport","127.0.0.1","root","");
    $sql =$c->prepare("INSERT INTO annonce (titre,description,point_depart,point_arrive,wilaya_depart,wilaya_arrive,type_transport,poids_inf,poids_sup,moyen_transport,etat,volume_inf,volume_sup,img) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");;
    $sql->bindParam(1,$titr);
   $sql->bindParam(2,$desc);
   $sql->bindParam(3,$pointdepart);
   $sql->bindParam(4,$pointarrive);
   $sql->bindParam(5,$wilaya_depart);
   $sql->bindParam(6,$wilaya_arrive);
   $sql->bindParam(7,$typetransport);
   $sql->bindParam(8,$poids_inf);
   $sql->bindParam(9,$poids_sup);
   $sql->bindParam(10,$moyen_transport);
   $sql->bindParam(11,$etat);
   $sql->bindParam(12,$volume_inf);
   $sql->bindParam(13,$volume_sup);
   $sql->bindParam(14,$img);


   $sql->execute();
    $this->deconnexion($c);


}
}


?>