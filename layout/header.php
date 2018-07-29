<?php
require_once 'lib/functions.php';
$utilisateur = current_user();
; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aztrek, un nouveau monde à chaque pas - <?php echo $title; ?></title>
  <link rel="shortcut icon" href="favicon/favicon_aztrek.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,900|Merienda">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <header class="header">
    <p>
      <i class="fas fa-phone"></i> 0 820 340 340 </p>

    <div class="logo">
      <img src="images/_logo_aztrek.png" alt="logo Aztrek">
      <h1 class="site-title">Aztrek</h1>
    </div>


            <?php require_once 'layout/nav.php'; ?>
        
          <div class="cta-social">
                        <ul class="inline-list">
                            <?php if (empty($utilisateur)) : ?>
                                <li>
                                    <a href="admin/register.php">
                                        <i class="fa fa-user-plus"></i>
                                        Créer un compte
                                    </a>
                                </li>
                                <li>
                                    <a href="admin/login.php">
                                        <i class="fa fa-sign-in"></i>
                                        Se connecter
                                    </a>
                                </li>
                            <?php else: ?>
                            <?php if($utilisateur["admin"] == 1) : ?>
                                <li>
                                    <a href="admin/">
                                        <i class="fa fa-cogs"></i>
                                        Administration
                                    </a>
                                </li>
                            <?php endif; ?>
                                <li>
                                    <a href="admin/logout.php">
                                        <i class="fa fa-sign-out"></i>
                                        Déconnexion
                                    </a>
                                </li>
                            <?php endif; ?>
        </div>
    </header>

    <main>