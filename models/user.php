<?php
class User{

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

public function insert($nom,$prenom,$email,$phone, $adresse,$pass,$liste) 
{
    $c=$this->connexion("esitransport","127.0.0.1","root","");
    $sql =$c->prepare("INSERT INTO utilisateur (nom,prenom,email,motdepasse,tel,adresse,type) VALUES (?,?,?,?,?,?,?)");
    $sql->bindParam(1,$nom);
    $sql->bindParam(2,$prenom);
    $sql->bindParam(3,$email);
    $sql->bindParam(4,$phone);
    $sql->bindParam(5,$adresse);
    $sql->bindParam(6,$pass);
    $sql->bindParam(7,"client");
    $sql->execute();
    $this->deconnexion($c);
}


}

?>