<?php
class admin
{
    
    
    public function vues()
    {
        $pageAdmin.= "
				<div id='content'>
				<form id='tabSelect' method='POST' action='index.php?page=admin'>
				Selection de Table : <select name='table'>
							<option value='-1'>--Veuillez choisir la requete---</option>
							<option value='select1'>Date</option>
							<option value='select2'>Marge</option>
						</select>
						<input id='btndex' type='submit' name='Selectioner' value='Selectioner'/>
				</form>		";
                if(isset($_POST['Selectioner']) && $_POST['table'] == "select1")
                {


                    $pageAdmin.= "<form method='POST' action='index.php?page=admin'>						
                                        <table>
                                        <tr>
                                                <td><input type='date' name='dateS1'/></td>		
                                                </tr>
                                        </table>	
                                        <div id='btnEnvoyer'>							
                                            <input  type='submit' name='selection1'/>&nbsp&nbsp

                                        </div>
                                        </form>";
                }

                elseif(isset($_POST['Selectioner']) && $_POST['table'] == "select2")
                {
                    $pageAdmin.= "<form method='POST' action='index.php?page=admin'>						
                                <table>
                                <tr>
                                    <td>	<input type='date' name='date1'/>			</td>					
                                      <td>       <input type='date' name='date2'/>	</td>
                                          <div id='btnEnvoyer'>							
                                    <input  type='submit' name='selection2'/>&nbsp&nbsp
                            </tr>
                                </div>
                                </form>";
                }
        return $pageAdmin;
    }
	public function select1()
    {
        if(isset($_POST['selection1']))
        {
           return selection1($_POST['dateS1']);
        }
        elseif(isset($_POST['selection2']))
        {
            return selection2([$_POST['date1']],$_POST['date2']);
        }
    }
}



?>