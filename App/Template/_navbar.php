 <div class="navbar navbar-dark bg-dark">
            <a href="/" class="btn btn-secondary mx-2">Home</a>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Api
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="api/post" target="_blank">Post</a></li>
                    <li><a class="dropdown-item" href="api/comment" target="_blank">Comment</a></li>

                </ul>
            </div>
             <?php
             if ( (new \App\Framework\Session\Session())->get("id")) : ?>
              <a href="new-post/<?php echo((new \App\Framework\Session\Session())->get('id')) ?>" class="btn btn-secondary mx-2">Créer un Post supprimé ?p=</a>
            <?endif; ?>
            <div>
                <?php
                if ( !(new \App\Framework\Session\Session())->get("id")) : ?>
                    <a class="btn btn-secondary mx-2" href="singin">Login</a>
                <?
                endif; ?>
                <?php
                if ( (new \App\Framework\Session\Session())->get("id")) : ?>
                    <a class="btn btn-secondary mx-2" href="logout">Logout</a>
                <?
                endif; ?>

            </div>
        </div>




