
     <div class="w-25 my-2"><h3><?php echo($post->getTitle()) ?></h3>
</div>
<div class="my-2"><p><?php echo($post->getContent()) ?> </p</div>
<div style="float: right; padding-left:10px;"><?php echo($post->getpublishedAt()) ?></div><div style="float: right">  <?php echo($post->getAuthor()->getfirstName()) ?> <?php echo($post->getAuthor()->getlastName()) ?></div>

<br><br>
<div style="border-bottom: 2px solid; margin-left:25%;width: 50%;"></div>

<div>

    <div ><?php echo($post->getpublishedAt()) ?> <?php echo($post->getAuthor()->getfirstName()) ?> <?php echo($post->getAuthor()->getlastName()) ?></div>
    <div class="my-2"><p><?php echo($post->getContent()) ?> </p</div>
    <div style="border-bottom: 2px solid; margin-left:25%;width: 50%;"></div>


</div>
     <form action=" " method="post" class="container w-50  my-5">
         <h2 class="text-center">Ajouter un commentaire</h2>
         <div class="form-group mt-2">
             <textarea  name="content" class="form-control "  placeholder="Contenue du commentaire" required="required"autocomplete="off"></textarea>
         </div>
         <div class="form-group text-center mt-2">
             <button type="submit" class="btn btn-success btn-block mb-2">Ajouter</button>
         </div>
     </form>