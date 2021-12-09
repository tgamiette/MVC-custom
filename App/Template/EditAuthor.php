

<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Edit Author</title>

</head>

<body>
<form action="#changer l'action" method="post" class="container w-25 shadow my-5 ">
  <h2 class="text-center">Edit author</h2>
  <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="<php=$name?>" required="required"autocomplete="off">
  </div>
  <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="<php=$email?>" required="required" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="<php=$password?>" required="required" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="checkbox" name="admin" id="admin" class="m-2" placeholder="<php=$password?>" required="required" autocomplete="off"><label for="admin">admin</label>
  </div>
  <div class="form-group text-center mt-2">
    <button type="submit" class="btn btn-success btn-block">Connexion</button>
  </div>
</form>
</body>
</html>
