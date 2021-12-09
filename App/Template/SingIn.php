<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Connexion</title>

    </head>

    <body>
        <form action="?p=login" method="get" class="container w-25 shadow my-5 ">
            <h2 class="text-center">Connexion</h2>
            <input style="display:none" name="p" value="login" />
            <div class="form-group">
                <input type="email" name="mail" class="form-control" placeholder="Email" required="required"autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="pwd" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
            </div>
            <div class="form-group text-center mt-2">
                <button type="submit" class="btn btn-success btn-block">Connexion</button>
            </div>
        </form>
    </body>
</html>
