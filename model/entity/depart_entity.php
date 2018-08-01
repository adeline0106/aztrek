<?php

function getAllDepartBySejour(int $id): array {
    global $connexion;
    $query = "SELECT
    utilisateur.nom,
    utilisateur.prenom,
    utilisateur.photo_profil,
    participation.montant,
    participation.utilisateur_id
FROM participation
INNER JOIN utilisateur
	ON utilisateur.id = participation.utilisateur_id
WHERE participation.projet_id = :id
ORDER BY participation.date_creation DESC;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    
    return $stmt->fetchAll();
}