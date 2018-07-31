<?php require_once '../../layout/header.php'; ?>

<h1>Ajouter une destination</h1>

<form action="insert_query.php" method="post">
    <div class="form-group row">
        <label for="input-nom" class="col-sm-2 col-form-label">Pays</label>
        <div class="col-sm-10">
            <input type="text" name="nom" class="form-control" placeholder="Pays">
        </div>
    </div>
     <div class="form-group row">
        <label for="input-image" class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-10">
            <input type="file" name="image" accept="images/*" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>


