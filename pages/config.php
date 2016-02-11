<?php
if( isset($_GET["lang"]) && (!empty($_GET["lang"])) ) 
{
	$_COOKIE['lang']=$_GET["lang"];
}

if(isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    // si aucune langue n'est déclarée on tente de reconnaitre la langue par défaut du navigateur
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2); 
} 

$path = $_SERVER['PHP_SELF'];
$page = basename ($path,'.php');

if ( $lang == "fr" ){	
	include('lang/fr-lang.php'); 
}

if ( $lang == "en" ){	
	include('lang/en-lang.php');
}

//définition de la durée du cookie (1 an)
$expire = 365*24*3600; 

//enregistrement du cookie au nom de lang
setcookie('lang', $lang, time() + $expire, "/"); 
?>
