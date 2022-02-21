    <?php include('header.php');?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-2">
        <div class="navbar-brand">
            Logo
        </div>
        <div class="navbar-toggler" style="color:rgb(30, 255, 0);"><span class="icon-facebook m-2"></span><span class="icon-instagram m-2"></span><span class="icon-github-sign m-2"></span></div>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".coll">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse coll justify-content-center">
            <ul class="nav nav-pills" role="tablist">
                <li class="navbar-item mr-3">
                    <a class="nav-link" href="#" role="tab" aria-selected="true"><span class="bi-house-door"></span> Acceuil</a>
                </li>
                <li class="navbar-item mr-3">
                    <a class="nav-link" href="#" role="tab" aria-selected="true"><span class="icon-user"></span>Boutiques</a>
                </li>
                <li class="navbar-item mr-3">
                    <a class="nav-link" href="music.php" role="tab" aria-selected="true"><span class="icon-laptop"></span>Musiques</a>
                </li>
                <li class="navbar-item mr-3">
                    <div class="dropdown">
                        <a class="nav-link" href="#" id="drop" data-bs-toggle="dropdown">
                            Partenaires
                        </a>

                        <div class="dropdown-menu" aria-labelledby="drop">
                            <a class="dropdown-item" href="#">Japande Shoes</a>
                            <a class="dropdown-item" href="#">Interlab Inc.</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Autres</a>
                        </div>
                    </div>
                </li>

                <li class="navbar-item mr-3">
                    <a class="nav-link" href="#" role="tab" aria-selected="true"><span class="icon-cogs"></span>Actions</a>
                </li>
                <li class="navbar-item mr-3">
                    <a class="nav-link" href="#" role="tab" aria-selected="true"><span class="icon-phone"></span>A propos</a>
                </li>
            </ul>
        </div>
    </nav>