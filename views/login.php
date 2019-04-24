<?php
if(isset($_SESSION['CLIENT']) && $_SESSION['CLIENT'] == 1 || isset($_SESSION['ADMIN'] )&& $_SESSION['ADMIN'] == 1 )
{
    return "
         <div id='content'>
            <form id='deconnecter' method='POST' action='index.php?page=../controllers/session'>
				<table>
					<tr>
                        <td>BONJOUR ".strtoupper($_SESSION['nameUser'])."</td>
                        <td><input id='btndex' type='submit' name='deconnecter' value='Deconnecter'/></td>
					</tr>						
				</table>
			</form>
        </div>
        ";
}
else
{   
   
    
    return "
        <div id='content'>
			<form class='login' method='POST' action='index.php?page=../controllers/session'>
                <h2>CLIENT</h2>
                   <table id='tableLogin'>
					<tr>
                        <td><i class='fa fa-user fa-2x' aria-hidden='true'></i></td>
					    <td><input type='text' name='C_utilisateur'/></td>
					</tr>
					<tr>
                        <td><i class='fa fa-key fa-2x' aria-hidden='true'></i></td>    
					    <td class='input-group margin-bottom-sm'><input type='password' name='C_passwd'/></td>
					</tr>
					<tr>                            
				        <td></td>
						<td><input type='submit' name='client' value='Entrez'/></td>
				    </tr>
				</table>
			</form>
            <form class='login' method='POST' action='index.php?page=../controllers/session'>
                <h2>ADMINISTRATEUR</h2>
                   <table id='tableLogin'>
					<tr>
                        <td><i class='fa fa-user fa-2x' aria-hidden='true'></i></td>
					    <td><input type='text' name='adminUsager'/></td>
					</tr>
					<tr>
                        <td><i class='fa fa-key fa-2x' aria-hidden='true'></i></td>
					    <td><input type='password' name='adminCle'/></td>
					</tr>
					<tr>                            
				        <td></td>
						<td><input type='submit' name='admin' value='Entrez'/></td>
				    </tr>
                </table>
			</form>
       
                 <form class='login' method='POST' action='index.php?page=login'>
                <h2>Inscription</h2>
                   <table id='tableInscription'>
					<tr>
                        <td>NOM:</td>
					    <td><input type='text' name='nom'/></td>
					</tr>
					<tr>
                       <td>PRENOM:</td>
					    <td><input type='text' name='prenom'/></td>
					</tr>
                    
                    <tr>
                        <td>USERNAME:</td>
					    <td><input type='text' name='username'/></td>
					</tr>
					<tr>
                       <td>PASSWORD:</td>
					    <td><input type='text' name='password'/></td>
					</tr>
                    
					<tr>                            
				        <td></td>
						<td><input type='submit' name='register' value='Entrez'/></td>
				    </tr>
                </table>
			</form>
          
		</div>
   ";
}

