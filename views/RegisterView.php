<?php
class RegisterView{
    
   public function afficherRegisterForm()
   {
?>
    <Html>  
    <head>   
    <title>  
    
    Registration Page  
    </title>  
    </head>  
    <body bgcolor="darkgrey">  
    <br>  
    <br>  
    <form>  
      
    <label> Nom </label>         
    <input type="text" name="nom" size="15"/> <br> <br>  
    <label> Prenom: </label>     
    <input type="text" name="prenom" size="15"/> <br> <br>  
    Email:  
    <input type="email" id="email" name="email"/> <br>    
    <br> <br> 
    
    <label>   
    Téléphone :  
    </label>  
    <input type="text" name="phone" size="10"/> <br> <br> 
    Address  
    <br>  
    <textarea cols="40" rows="2" value="address" name="adresse">  
    </textarea>  
    <br> <br>  
    Mot de passe:  
    <input type="Password" id="pass" name="pass"> <br>   
    <br> <br>  
    
     
    <input type="checkbox" id="agreed" onchange='handleChange(this);' name="check">
      Je veux etre un trasporteur
      
    <br>  
    <br>  
    <div id="div1" style="display:none">
    <label>   
    Trajets :  
    </label>   
    <select name = 'subject[]' multiple>  
    <option value="Alger">Alger</option>  
    <option value="Annaba">Annaba</option>  
    <option value="Bouira">Bouira</option>  
    
    </select>  
      
    <br>  
    <br>  
    </div>
    <input type="button" value="Submit"/>  
    </form>  
    </body>  
    </html>  
    
    
    <script>
    function handleChange(checkbox) {
        if(checkbox.checked == true){
            document.getElementById("div1").style.display = "inline-block";
        }
        else{
            document.getElementById("div1").style.display = "none";
            }
    }
    
        </script>
   }

<?php
if (isset($_POST['submit'])) 
{
    $nom = $_POST['nom'] ;
    $prenom = $_POST['prenom'] ;
    $email = $_POST['email'] ;
    $phone= $_POST['phone'] ;
    $adresse=$_POST['adresse'] ;
    $pass=$_POST['pass'] ;
    if(isset($_POST['check']))
    {
        if(isset($_POST["subject"]))
        {
            
            $liste = $_POST["subject"] ;
        }
    }
    $c = new UserController() ;
    $c->register($nom,$prenom,$email,$phone, $adresse,$pass,$liste) ;

    

}
}
