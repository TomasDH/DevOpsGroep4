<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
include_once "models/Pagina_Data.class.php";
$paginaData = new Pagina_Data();
//$pageData->titel = "PHP/MySQL site poll voorbeeld";
//wijzigingen aanbrengen in de code
$dbInfo = "mysql:host=localhost;dbname=polldb"; $dbUser = "root";
$dbPassword = "";
try {
 $db = new PDO( $dbInfo, $dbUser, $dbPassword );
 $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 $paginaData->content = "<h1>e zijn verbonden</h1>";
}catch ( Exception $e ) {
 $paginaData->content = "<h1>De connectie lukt niet!</h1><p>$e</p>";
}
$paginaData->content = include_once "controllers/poll.php";
//einde van de code wijzigingen
$pagina = include_once "views/pagina.php";
echo $pagina;