<?php

require 'vendor/autoload.php';

use App\Entity\Post;

$post = new Post();

$postmanager = new \App\Manager\PostManager();
var_dump($postmanager->findAll());

?>
<!---->
<!--<!DOCTYPE html>-->
<!---->
<!--<html lang="fr">-->
<!---->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"-->
<!--            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"-->
<!--            crossorigin="anonymous"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"-->
<!--            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"-->
<!--            crossorigin="anonymous"></script>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--<div class="content">-->
<!--    <h2 class="text-center">Inscription</h2>-->
<!--    <form action="" method="post">-->
<!--        <div class="form-group row row">-->
<!--            <label for="name_user">Nom</label>-->
<!--            <input type="text" name="nom_user" class="form-control" placeholder="Nom" required="required"-->
<!--                   autocomplete="off">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group row">-->
<!--            <label for="name_user">Prénom</label>-->
<!--            <input type="text" name="prenom_user" class="form-control" placeholder="Prénom" required="required"-->
<!--                   autocomplete="off">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group row">-->
<!--            <label for="name_user">Adresse mail</label>-->
<!--            <input type="email" name="email" class="form-control" placeholder="Email" required="required"-->
<!--                   autocomplete="off">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group row">-->
<!--            <label for="name_user">Mot de passe</label>-->
<!--            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required"-->
<!--                   autocomplete="off">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group row">-->
<!--            <label for="name_user">Confirmez le mot de passe</label>-->
<!--            <input type="password" name="password_retype" class="form-control" placeholder="Confirmez le mot de passe"-->
<!--                   required="required" autocomplete="off">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group row">-->
<!--            <button type="submit" class="btn btn-block">Inscription</button>-->
<!--        </div>-->
<!--    </form>-->
<!--    <p class="text-center"><a href="connexion.php" style="color:#0BD3D3;">Connexion</a></p>-->
<!---->
<!--</div>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--</body>-->
<!---->
<!--</html>-->
