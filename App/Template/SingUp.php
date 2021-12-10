
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inscription</title>

</head>

<body>
<form action="" method="post" class="container w-25 shadow my-5">
    <h2 class="text-center">Inscription</h2>
    <div class="form-group mt-2">
        <input type="text" name="firstname" class="form-control" placeholder="Prénom" required="required" autocomplete="off">
        <input type="text" name="lastname" class="form-control" placeholder="Nom" required="required" autocomplete="off">
    </div>
    <div class="form-group mt-2">
        <input type="email" name="mail" class="form-control" placeholder="Email" required="required"autocomplete="off">
    </div>
    <div class="form-group mt-2">
        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
    </div>
<!--    <div class="form-group mt-2">-->
<!--        <input type="password" name="password_retype" class="form-control" placeholder="Confirmez le mot de passe" required="required" autocomplete="off">-->
<!--    </div>-->
    <div class="form-group text-center mt-2">
        <button type="submit" class="btn btn-success btn-block">Inscription</button>
    </div>
</form>
</body>
</html>

