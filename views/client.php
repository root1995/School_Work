<?php
$clientTmp=new client();
$clientTmp->Suggerer();
requetOracle(1); // Liste des sugestions
$tabSelectionResultat = $_SESSION['tabSelectionResultat'];
$tabSelectionNbRows = $_SESSION['tabSelectionNbRows'];


   

    $pageEtud .= $clientTmp->tableau();




return $pageEtud;