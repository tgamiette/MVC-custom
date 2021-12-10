<nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <?php
            if ( !(new \App\Framework\Session\Session())->get("id")) : ?>
                <a class="navbar-brand" href="singin">Login</a>
            <?
            endif; ?>
            <?php
            if ( (new \App\Framework\Session\Session())->get("id")) : ?>
                <a class="navbar-brand" href="logout">Logout</a>
            <?
            endif; ?>

        </div>
    </div>
</nav>
dvv