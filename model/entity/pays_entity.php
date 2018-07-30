<?php

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

