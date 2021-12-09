<pre
<?php

var_dump($posts[0]);

printf($posts[0]->getId());

?>

<a href="?p=post&id=<?php echo($posts[0]->getId()) ?>">Voir cette arcticle</a>
