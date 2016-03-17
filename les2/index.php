<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
include_once "classes/Pagina_Data.class.php";
$paginaData = new Pagina_Data();
$paginaData->titel = "HTML Forms met PHP";
$paginaData->content = include_once "C:/xampp/htdocs/School/les2/views/navigatie.php";
//wijzigingen beginnen hier
//$paginaData->content .= “<div>...en een form hier</div>";
$navigatieIsClicked = isset($_GET['pagina']);
if ( $navigatieIsClicked ) {
$fileToLoad = $_GET['pagina'];
} else {
$fileToLoad = "zoeken";
}
$paginaData->content .=include_once "C:/xampp/htdocs/School/les2/views/$fileToLoad.php";
$pagina = include_once "C:/xampp/htdocs/school/les2/templates/pagina.php";
echo $pagina;

