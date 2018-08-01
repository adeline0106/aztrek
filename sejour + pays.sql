USE aztrek;

 SELECT
	sejour.*,
    pays.nom AS pays,
    categorie.libelle AS categorie
FROM sejour
INNER JOIN categorie ON categorie.id = sejour.categorie_id
INNER JOIN pays ON pays.id = sejour.pays_id;




