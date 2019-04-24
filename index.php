<?php
if(!session_id())
{
   session_start(); 
}
error_reporting(0);
ini_set("display_errors",1);

include_once "models/functions.php";
include_once"controllers/lib_client.php";
include_once"controllers/lib_admin.php";
include_once"connection/connec.php";
connex("cafeteria");
$client=new client();
$client->Identity();
$pageData = new stdClass(); // class generique
$pageData->title = "La cafeteria de teccart ";
$pageData->css = "<link rel='stylesheet' href='css/style.css' />";
$pageData->css .= "<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>";
$pageData->script="<script src='js/jquery.js'></script>";
$pageData->script.="<script src='js/code.js'></script>";


$pageData->content = include_once "controllers/navigation.php";
$userClicked = isset($_GET['page']);

if($userClicked)
{
    $fileToLoad = $_GET['page'];
    $pageData->content .= include_once "views/$fileToLoad.php";

}
else
{
    $fileToLoad = "login";
    $pageData->content .= include_once "views/$fileToLoad.php";
   
    
    
}

$page = include_once "views/page.php";


echo $page;


