<?php
require_once '../../../model/database.php';

$liste_categories = getAllEntities("categorie");
$liste_pays = getAllEntities("pays");

require_once '../../layout/header.php';
?>

<h1>Ajouter un séjour</h1>

<form action="insert_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Titre</label>
        <div class="col-sm-10">
            <input type="text" name="titre" class="form-control" placeholder="Titre">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input type="file" name="image" accept="images/*" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Durée</label>
        <div class="col-sm-10">
            <input type="number" name="duree" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description longue</label>
        <div class="col-sm-10">
            <textarea name="description_courte" class="form-control"></textarea>
        </div>
    </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea name="description_longue" class="form-control"></textarea>
        </div>
    </div>
     <div class="form-group row">
        <label class="col-sm-2 col-form-label">Catégorie</label>
        <div class="col-sm-10">
            <select name="categorie_id" class="form-control">
                <?php foreach ($liste_categories as $categorie) : ?>
                    <option value="<?php echo $categorie["id"]; ?>">
                        <?php echo $categorie["libelle"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pays</label>
        <div class="col-sm-10">
            <select name="pays_id" class="form-control">
                <?php foreach ($liste_pays as $pays) : ?>
                    <option value="<?php echo $pays["id"]; ?>">
                        <?php echo $pays["nom"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
     <div class="form-group row">
        <label class="col-sm-2 col-form-label">Incontournable</label>
        <div class="col-sm-10">
            <input type="checkbox" name="incontournable" class="form-control">
        </div>
    </div>
    
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>


