<?php



function getAllSejoursByDepart (int $limit = 999): array {
    global $connexion;
    $query = "SELECT
          sejour.*,
          DATE_FORMAT(sejour.date_creation, '%d/%m/%Y') AS date_creation_format,
          IF(DATEDIFF(NOW(), sejour.date_creation) < 80, 1, 0) AS nouveau,
          pays.nom AS pays,
          MIN(depart.prix) AS prix
    FROM sejour
    INNER JOIN pays ON pays.id = sejour.pays_id
    LEFT JOIN depart ON depart.sejour_id = sejour.id
    WHERE depart.date_depart > NOW() OR depart.date_depart IS NULL
    GROUP BY sejour.id
    ORDER BY sejour.date_creation DESC;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();
    
    return $stmt->fetchAll();

}


function getAllSejours(array $options = [], int $limit = 999): array {
    global $connexion;
    
    $query = "SELECT
                sejour.*,
                DATE_FORMAT(sejour.date_creation, '%d/%m/%Y') AS date_creation,
                pays.nom AS pays,
                categorie.libelle AS categorie
            FROM sejour
            INNER JOIN categorie ON categorie.id = sejour.categorie_id
            INNER JOIN pays ON pays.id = sejour.pays_id ";
    
    if (isset($options["incontournables"])) {
        $query .= "WHERE sejour.incontournable = 1 ";
    }
    
    $query .= "ORDER BY sejour.date_creation LIMIT :limit";
    
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

function insertSejour(string $titre, string $image, int $duree, string $description_courte, string $description_longue, int $categorie_id, int $pays_id, int $incontournable): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO sejour (titre, duree, image, date_creation, description_courte, description_longue, categorie_id, pays_id, incontournable) VALUES (:titre, :duree, :image, NOW(), :description_courte, :description_longue, :categorie_id, :pays_id, :incontournable)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":incontournable", $incontournable);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updateSejour(int $id, string $titre, string $image, int $duree, string $description_courte, string $description_longue, int $categorie_id, int $pays_id, int $incontournable): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE sejour 
                SET titre = :titre,
                    image = :image,
                    duree = :duree,
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
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":incontournable", $incontournable);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}