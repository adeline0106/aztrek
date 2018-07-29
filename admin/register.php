<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Créer un compte</title>

        <!-- Bootstrap core CSS -->
        <link href="css/plugins.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <form class="form-signin" action="register_query.php" method="post" enctype="multipart/form-data">
            <h1 class="h3 mb-3 font-weight-normal">Créer un compte</h1>
            <label for="inputNom">Nom</label>
            <input type="text" name="nom" id="inputNom" class="form-control" placeholder="Nom" required autofocus>
            <label for="inputPrenom" class="sr-only">Prénom</label>
            <input type="text" name="prenom" id="inputPrenom" class="form-control" placeholder="Prénom" required autofocus>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required>
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
             <label for="inputPseudo" class="sr-only">Pseudo</label>
             <input type="text" name="pseudo" id="inputPseudo" class="form-control" placeholder="Pseudo">
             <label for="inputAdresse" class="sr-only">Adresse</label>
             <input type="text" name="adresse" id="inputAdresse" class="form-control" placeholder="Adresse">
             <label for="inputTelephone" class="sr-only">Numéro de téléphone</label>
             <input type="tel" name="phone" id="inputPhone" class="form-control" placeholder="N° de téléphone">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Créer un compte</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
    </body>
</html>