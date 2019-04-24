<?php
    function selection1($dateS)
    {
        $sql="select * from sugestion where soumission='$dateS'";
        $resultats=mysql_query($sql);
        $listReponse.= "
                <form method='POST' action='index.php?page=admin' enctype='multipart/form-data'>
                <table class='tabForm'>
                    <tr>
                        <th> Nom</th>
                        <th> Date Soumission </th>
                        <th> Ingredient </th>
                        <th> Etapes</th>
                        <th> Type</th>
                        <th> Photo</th>
                       
                    </tr>";
         while($produit=mysql_fetch_array($resultats))
		{
            
        
			$listReponse .= "
				<tr>
					<td name='idproduit' >".strtoupper($produit['nom'])."</td>
					<td name='nomproduit' >".strtoupper($produit['soumission'])."</td>
					<td>".strtoupper($produit['ingredient'])."</td>
					<td>".strtoupper($produit['etapes'])."</td>		
                     <td>".strtoupper($produit['type'])."</td>
					<td ><img id='imgBouffe' src='".$produit['photo']."'/></td>
					
				</tr>
				";
				
        }
        $listReponse.="</table></form></div>";
       
        return $listReponse;
    
        
    }
 function selection2($date1,$date2)
    {
        $sql="select * from sugestion where soumission between '$date1' and '$date2'";
        $resultats=mysql_query($sql);
        $listReponse.= "
                <form method='POST' action='index.php?page=admin' enctype='multipart/form-data'>
                <table class='tabForm'>
                    <tr>
                        <th> Nom</th>
                        <th> Date Soumission </th>
                        <th> Ingredient </th>
                        <th> Etapes</th>
                        <th> Type</th>
                        <th> Photo</th>
                       
                    </tr>";
         while($produit=mysql_fetch_array($resultats))
		{
            
        
			$listReponse .= "
				<tr>
					<td name='idproduit' >".strtoupper($produit['nom'])."</td>
					<td name='nomproduit' >".strtoupper($produit['soumission'])."</td>
					<td>".strtoupper($produit['ingredient'])."</td>
					<td>".strtoupper($produit['etapes'])."</td>		
                     <td>".strtoupper($produit['type'])."</td>
					<td ><img id='imgBouffe' src='".$produit['photo']."'/></td>
					
				</tr>
				";
				
        }
        $listReponse.="</table></form></div>";
       
        return $listReponse;
    
        
    }
function lister()
{
   
        $sql="select * from sugestion";
        $resultat=mysql_query($sql);
        
        empty($listReponse);
            $listReponse.= "<div id='content'>
                <form method='POST' action='index.php?page=client' enctype='multipart/form-data'>
                <table class='tabForm'>
                    <tr>
                        <th> Nom</th>
                        <th> Date Soumission </th>
                        <th> Ingredient </th>
                        <th> Etapes</th>
                        <th> Type</th>
                        <th> Photo</th>
                        <th><input type='submit' name='insert' value='Insert'/></th>
                       
                    </tr>
                    
                    <tr>
										<td><input type='text' name='nom'/></td>
										<td><input type='date' name='soumission'/></td>
										<td><input type='text' name='ingredient'/></td>
										<td><input type='text' name='etapes'/></td>
										<td><input type='text' name='wow'/></td>
										<td><input type='file' name='photo'/></td>
								
				     </tr>
                    
                    
                    
                    
                    ";
        while($produit=mysql_fetch_array($resultat))
		{
            
        
			$listReponse .= "
				<tr>
					<td name='idproduit' >".strtoupper($produit['nom'])."</td>
					<td name='nomproduit' >".strtoupper($produit['soumission'])."</td>
					<td>".strtoupper($produit['ingredient'])."</td>
					<td>".strtoupper($produit['etapes'])."</td>		
                     <td>".strtoupper($produit['type'])."</td>
					<td ><img id='imgBouffe' src='".$produit['photo']."'/></td>
					
				</tr>
				";
				
        }
    $listReponse.="</table></form></div>";
       
        return $listReponse;
    
    
}
function suggestion($nom,$soumission,$ingredient,$etapes,$sorte,$photo)
{
    
 
  
        
                         $name=$_FILES['photo']['name'];
						$tmp_name=$_FILES['photo']['tmp_name'];
						$erreur=$_FILES['photo']['error'];
						$type=$_FILES['photo']['type'];
						echo "<script type='text/javascript'>alert(".$sorte.");</script>";
						if($erreur)
						{
							echo "<script type='text/javascript'>alert(' Erreur pour monter Image');</script>";
						}						
						else
						{
							$chemin='img/'.$name;
							move_uploaded_file($tmp_name, $chemin);
						}	
        
        $insert="insert into sugestion values ('$nom','$soumission','$ingredient','$etapes','$sorte','$chemin')";
        mysql_query($insert);
       
    
}

function ConnectSql($login, $password, $typeSession) // function pour verifier la session
{
    
        //2) Requete d'selection---> admin =2, client = 1
        
        if($typeSession == 2)
        {
            $selection="select * from admin where upper(login)=upper('$login') and upper(password)=upper('$password')";
        }
        elseif($typeSession == 1)
        {
            $selection="select * from client where upper(nomutilisateur)=upper('$login') and upper(password)=upper('$password')";
        }
        //3) Execution de la Requete de selection
            $resultat=mysql_query($selection);
            
        //4)Analyse le nombre de ligne que notre selection a choisi
            $reponse=mysql_num_rows($resultat);

        //5) Fermeture de la connexion
		//echo "<script type='text/javascript'>alert('".$enreg[0]."');</script>";
  
        return $reponse;
    
}

function inscription($nom,$prenom,$username,$password)
{
    
    if(!$idcom)
    {
        echo "Echec de Connexion";
    }
    else
    {
        $requete="insert into client values('$nom','$prenom','$username','$password')";
        mysql_query($requete);
        empty($idcom);
    }
    
}

function requetOracle($typeSession) // function pour selection
{ 
    
		$nameUser = $_SESSION['nameUser'];
        //2) Requete d'selection--->
        if($typeSession == 1)
        {
            $selection="select * from sugestion";
        }
        
        //3) Execution de la Requete 
         $resultat=mysql_query($selection);
       // 4)Analyse ou affiche des resultats
		$nbrows=mysql_num_rows($resultat);		
		$_SESSION['tabSelectionResultat'] = $resultat;
		$_SESSION['tabSelectionNbRows'] = $nbrows;		
        
    
}

