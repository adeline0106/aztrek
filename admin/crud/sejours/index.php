<?php
require_once '../../../model/database.php';

//$liste_sejours = getAllEntities("sejour");
//$liste_pays = getAllEntities("pays");

$liste_sejours = getAllSejours();


require_once '../../layout/header.php';
?>

<h1>Gestion des séjours</h1>

<a href="insert_form.php" class="btn btn-primary">Ajouter</a> 
<hr>

<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Titre</th>
            <th>Date de création</th>
            <th>Photo</th>
            <th>Pays</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_sejours as $sejour) : ?>
            <tr>
                <td><?php echo $sejour["titre"]; ?></td>
                <td><?php echo $sejour["date_creation"]; ?></td>
                <td>
                    <img src="<?php echo SITE_URL . "/uploads/" . $sejour["image"]; ?>" class="img-thumbnail">
                </td>
                <td><?php echo $sejour["pays"]; ?></td>
                <td class="col-actions">
                    <form action="delete_query.php" method="post" class="form-delete">
                        <input type="hidden" name="id" value="<?php echo $sejour["id"]; ?>">
                        <button type="submit" class="btn btn-danger" title="Supprimer">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                    <a href="update_form.php?id=<?php echo $sejour["id"]; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>