<?php


function insertReservation(float $montant, int $projet_id, int $utilisateur_id): int{
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO participation (montant, date_creation, projet_id, utilisateur_id) VALUES (:montant, NOW(), :projet_id, :utilisateur_id);";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":montant", $montant);
    $stmt->bindParam(":projet_id", $projet_id);
    $stmt->bindParam(":utilisateur_id", $utilisateur_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}