
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajouter un post</title>

</head>

<body>
<!--action a modifier-->
<form action=" " method="post" class="container w-50 shadow my-5">
    <h2 class="text-center">Ajouter un post</h2>
    <div class="form-group mt-2">
        <input type="text" name="title" class="form-control w-50" placeholder="Titre du post" required="required" autocomplete="off">
    </div>
    <div class="form-group mt-2">
        <textarea  name="content" class="form-control "  placeholder="Contenue du post" required="required"autocomplete="off"></textarea>
    </div>
    <div class="form-group text-center mt-2">
        <button type="submit" class="btn btn-success btn-block mb-2">Connexion</button>
    </div>
</form>
</body>
</html>

