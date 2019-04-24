<?php
include_once "models/functions.php"; // fichier des functions
class client
{
	private $nom;
	private $prenom;
	private $nomUtilisateur;
	private $password;
	
	
	public function Identity()
	{
        
        if(isset($_POST['register']))
        {
        $this->nom=$_POST['nom'];
	    $this->prenom=$_POST['prenom'];
        $this->nomUtilisateur=$_POST['username'];
	    $this->password=$_POST['password'];
        inscription($_POST['nom'],$_POST['prenom'],$_POST['username'],$_POST['password']);
        }
	
	}

	public function Suggerer()
    {
        
         if(isset($_POST['insert']))
         { suggestion($_POST['nom'],$_POST['soumission'],$_POST['ingredient'],$_POST['etapes'],$_POST['wow'],$_POST['photo']);
        unset($_POST['insert']);
        
         }
        
    }
    public function tableau()
    {
        $liste=lister();
        return $liste;
    }
}


?>