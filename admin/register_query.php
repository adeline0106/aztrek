<?php
require_once '../model/database.php';

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$password = $_POST["password"];
$pseudo = $_POST["pseudo"];
$adresse = $_POST["adresse"];
$phone = $_POST["phone"];

// Upload de l'image
//$photo = $_FILES["photo"]["name"];
//$tmp = $_FILES["photo"]["tmp_name"];

//move_uploaded_file($tmp, "../upload/" . $photo);

insertUtilisateur($nom, $prenom, $email, $password, $pseudo, $adresse, $phone);

header("Location: login.php");
