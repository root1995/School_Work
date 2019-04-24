<?php
empty($pageAdmin);
$adminTmp=new admin();
$pageAdmin.=$adminTmp->vues();
$pageAdmin.=$adminTmp->select1();
					


	


$pageAdmin .= "</div>";
return $pageAdmin;