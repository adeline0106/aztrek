<?php

/**
 * Retourne la liste des séjours
 * @return array Liste des séjours
 */

function getAllSejours(int $limit = 999): array {
    global $connexion;
    $query = " SELECT
	sejour.titre,
        sejour.date_creation,
        sejour.duree,
        sejour.image,
        sejour.description_courte,
        sejour.description_longue
FROM sejour
INNER JOIN categorie ON categorie.id = sejour.categorie_id
INNER JOIN pays ON pays.id = sejour.pays_id
;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

function getSejour(int $id): array {
    global $connexion;

        $query = " SELECT
	sejour.titre,
        sejour.date_creation,
        sejour.duree,
        sejour.image,
        sejour.description_courte,
        sejour.description_longue
FROM sejour
INNER JOIN categorie ON categorie.id = sejour.categorie_id
INNER JOIN pays ON pays.id = sejour.pays_id
WHERE sejour.id=:id
;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    
    return $stmt->fetch();
}

function insertSejour(string $titre, string $image, int $duree, string $date_creation, string $description_courte, string $description_longue, int $categorie_id, int $pays_id, int $incontournable): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO sejour (titre, duree, image, date_creation, description_courte, description_longue, categorie_id, pays_id, incontournable) VALUES (:titre, :image, :duree, :date_creation, :description_courte, :description_longue, :categorie_id, :pays_id, :incontournable)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":date_creation", $date_creation);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":incontournable", $incontournable);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updateSejour(int $id, string $titre, string $image, int $duree, string $date_creation, string $description_courte, string $description_longue, int $categorie_id, int $pays_id, int $incontournable): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE projet 
                SET titre = :titre,
                    image = :image,
                    duree = :duree,
                    date_creation = :date_creation,
                    description_courte = :description_courte,
                    description_longue = :description_longue,
                    categorie_id = :categorie_id,
                    pays_id = :pays_id,
                    incontournable = :incontournable
                WHERE id = :id
                ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":date_creation", $date_creation);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":incontournable", $incontournable);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}