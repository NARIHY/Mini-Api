<?php 
require 'class/ModelJson.php';
require 'class/Connexion.php';


// new PDO('mysql:host=localhost;dbname=test', $user, $pass);
$con = new Connexion("mysql","localhost","projet","root", "");

//Test pour l'insertion
// $q = "INSERT INTO note (note) VALUES (:note)";
// $p = [
//     ':note' => 'test'
// ];
// $con->execute($q, $p);
//OK POUR TOUS LES TEST

//Test update
// $u = "UPDATE note SET note = :note WHERE id = :id";
// $ui = [
//     ':id' => 1,
//     ':note' => 'test 1'
// ];

// $con->execute($u, $ui);

