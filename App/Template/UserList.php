<div class="container">
    <?php
    foreach ($users as $user) : ?>
        <div class="my-4 border">
            <div><?=$user->getfirstName()?>  <?=$user->getlastName()?></div>
            <div><?=$user->getMail()?></div>
            <a class="btn btn-secondary" href="/editauthor/<?=$user->getid()?>">Update</a>
            <a class="btn btn-danger" href="/delete-user/<?=$user->getid()?>">Delete</a>
        </div>
    <?
    endforeach; ?>
</div>