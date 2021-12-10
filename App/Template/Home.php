
<div class="container">

    <?php foreach ($posts as $post){ ?>

        <div class="w-25 my-2"><h3><?php echo($post->getTitle()) ?></h3>
        </div>
        <div class="my-2"><p><?php echo($post->getContent()) ?> </p</div>
        <div style="float: left"> <a href="post/<?php echo($post->getId()) ?>">Voir cette arcticle</a> </div>
    <div style="float: right; padding-left:10px;"><?php echo($post->getpublishedAt()) ?></div><div style="float: right">  <?php echo($post->getAuthor()->getfirstName()) ?> <?php echo($post->getAuthor()->getlastName()) ?></div>
        <br>
    <?php } ?>

</div>




