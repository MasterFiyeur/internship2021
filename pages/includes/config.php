<?php
//Edit this for production
$BASE_PATH = "/Prototypes/";

/* Start session */
session_start();

/* Language definition */
if(!isset($_SESSION["lang"])){
	$_SESSION["lang"] = "ru";
}
if(isset($_GET["lang"]) && in_array($_GET["lang"],array("fr","ru"))){
	$_SESSION["lang"] = $_GET["lang"];
}	

switch ($_SESSION["lang"]) {
	case 'ru':
		include "lang.ru.php";
		break;
		
	default:
		include "lang.fr.php";
		break;
}

?>