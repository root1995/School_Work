<?php
error_reporting(0);
$message="";
$bienvenue="";
if(isset($_POST['deconnecter']))
{
    empty($_SESSION['CLIENT']);
    empty($_SESSION['ADMIN']);
    session_destroy();
    header( "refresh:1; url=index.php?page=login" );
}
else
{
   
    
    if(isset($_POST['client']) && !empty($_POST['C_utilisateur']) && !empty($_POST['C_passwd']))
    {
        $_SESSION['nameUser'] = $_POST['C_utilisateur'];
        $etudConn = ConnectSql($_POST['C_utilisateur'],$_POST['C_passwd'], 1);
        if($etudConn == 1)
        {
            $_SESSION['CLIENT'] = 1;
            empty($_SESSION['ADMIN']);
            $bienvenue = "Client  ".strtoupper($_POST['C_utilisateur'])."";
            header( "refresh:1; url=index.php?page=etud" );
        }
        else
        {
             $message = "<script type='text/javascript'>alert('This user does not figure in our databasae .Please register');</script>".header( 'refresh:1; url=index.php?page=login' )."";
        }
        
    }
    elseif(isset($_POST['admin']) && !empty($_POST['adminUsager']) && !empty($_POST['adminCle']))
    {
        $_SESSION['nameUser'] = $_POST['adminUsager'];
        $etudConn = ConnectSql($_POST['adminUsager'],$_POST['adminCle'], 2);
        if($etudConn == 1)
        {
            empty($_SESSION['CLIENT']);
            $_SESSION['ADMIN'] = 1;
			$bienvenue = "Admin ".strtoupper($_POST['adminUsager'])."";
            header( "refresh:1; url=index.php?page=admin" );
        }
        else
        { $message = "<script type='text/javascript'>alert('Your credentials do not have the appropriate permissions');</script>".header( 'refresh:1; url=index.php?page=login' )."";
        }
        
    }
   
    else
    {
        $message = "<script type='text/javascript'>alert('Remplissez tous les champs');</script>".header( 'refresh:0; url=index.php?page=login' )."";
        
    }
}
return  "
    <div id='loading'><h2>".$bienvenue."<br>Rechargement...</h2></div> $message
";
?>