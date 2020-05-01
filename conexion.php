<?php

$servidor="localhost";
$usuario="root";
$password="";
$db="mylibreria";

$conexion=mysqli_connect($servidor,$usuario,$password,$db) or die (mysqli_error());




?>

<?php
///// CONEXION A LA BASE DE DATOS /////////
$usuario='root';
$contraseña='';
$host='localhost';
$base='mylibreria';

try {
   		$conexioon = new PDO('mysql:host='.$host.';dbname='.$base, $usuario, $contraseña);
	}
	catch (PDOException $e)
	{
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
?>
