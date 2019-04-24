<?php
//error_reporting(0);
    if(isset($_SESSION['CLIENT']) && $_SESSION['CLIENT'] == 1 )
    {
        return "            
            <div id='nav'>
                <ul>
                	<li><a href='index.php?page=login'><i id='icoLogin' class=' fa fa-power-off  fa-5x fa-fw'></i></a></li>
                	<li><a href='index.php?page=client'><i id='icoEtud' class='fa fa-tasks fa-5x fa-fw'></i></a></li>
                </ul>
            </div>
        ";
    }
	elseif(isset($_SESSION['ADMIN']) && $_SESSION['ADMIN'] == 1)
    {
        return "            
            <div id='nav'>
                <ul>
                	<li><a href='index.php?page=login'><i id='icoLogin' class='fa fa-power-off  fa-5x fa-fw'></i></a></li>
                	<li><a href='index.php?page=admin'><i id='icoAdmin' class='fa fa-lock fa-5x fa-fw'></i></a></li>
                </ul>
            </div>
        ";
    }

	else
	{
		return "            
            <div id='nav'>
                <ul>
                	<li><a href='index.php?page=login'><i id='icoLogin' class='fa fa-power-off  fa-5x fa-fw'></i></a></li>
                   <li><a href='#tableInscription'><i id='icoregister' class='fa fa-floppy-o  fa-5x fa-fw'></i></a></li>
            </div>
        ";
	}