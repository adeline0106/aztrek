<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$nom = $_POST["nom"];




updateReservation($id, $nbre_reservation, $valide);

header("Location: index.php");
