<?php

function insertPays(string $nom, string $image): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO pays (nom, image) VALUES (:nom, :image)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
}

function updatePays(int $id, string $nom, string $image) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE pays
                SET nom = :nom,
                    image = :image
                WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
    
    
}

/**
 * Retourne la liste des séjours
 * @return array Liste des séjours
 */

function getAllPays(int $limit = 999): array {
    global $connexion;
    $query = " SELECT
	pays.nom,
        pays.image
FROM pays;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

