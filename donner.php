<?php 
require 'class/ModelJson.php';
require 'class/Connexion.php';

//Indication que cette page est en JSON et non une page simple
header('Content-Type: application/json');
//Connexion a la bd
$con = new Connexion("mysql","localhost","projet","root", "");
//donner a afficher

$encode = new ModelJson($con->select("SELECT * FROM note"));
echo $encode->json_return();