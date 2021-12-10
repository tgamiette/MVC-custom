
<form action="#changer l'action" method="post" class="container w-25 shadow my-5 ">
  <h2 class="text-center">Edit author</h2>
  <div class="form-group">
    <input type="text" name="firstName" class="form-control" placeholder="Prénom" value= <?echo($user->getfirstName())?> required="required"autocomplete="off">
  </div>
  <div class="form-group">
    <input type="text" name="lastName" class="form-control" placeholder="Nom" value= <?echo($user->getlastName())?> required="required" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="email" name="mail" class="form-control my-2" placeholder="email" value= <?echo($user->getmail())?> required="required" autocomplete="off">
  </div>
  <? if($user->isAdmin()== 1 ){ ?>
      <input type="checkbox" id="admin" checked>

    <? }else{?>

      <input type="checkbox"name="admin" id="admin" >
    <?}?>
    <label for="admin">Admin</label>
  <div class="form-group text-center mt-2">
    <button type="submit" class="btn btn-success btn-block my-2">Modifier</button>
  </div>
</form>
