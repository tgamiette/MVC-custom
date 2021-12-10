

<div class="container">
    <?php foreach ($users as $user){ ?>
    <div class="my-4 border">
        <div><?php  echo($user->getfirstName()) ?><?php  echo($user->getlastName()) ?></div>
        <div><?php  echo($user->getMail()) ?></div>


        <a class="btn btn-secondary" href="/editauthor/<?php echo($user->getid()) ?>">Update</a>
        <a class="btn btn-danger" href="/editauthor/<?php echo($user->getid()) ?>">Delete</a>
    </div>
    <? } ?>
</div>