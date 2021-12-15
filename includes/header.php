<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="col-2 col-sm-1">
        <a class="navbar-brand" href="index.php">La Friperie</a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-9 col-sm-9 text-center center">
        <div class="collapse navbar-collapse center" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" href="articles.php?categorie=homme">HOMME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="categorie=femme">FEMME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="categorie=enfant">ENFANT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="categorie=accessoire">ACCESSOIRE</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-2 col-sm-1">
        <?php if(is_logged()): ?>
            <p> Bienvenue <?= $_SESSION['user_name']?> ! |<a href="index.php?action=logout">Se déconnecter</a> </p>
        <?php else: ?>
            <div id="LogginBox">
                <form method="post">
                    <label>Se Connecter :</label>
                    <br>
                    <input class="recherche" type="email" name="form_email" id="recherche" placeholder="Adresse Mail"/>
                    <input class="" type="password" name="form_password" placeholder="Mot De Passe"/>
                    <br>
                    <input type="submit" name="valid_connection" placeholder="se connecter"/>
                    <input type="checkbox" name="rememberme" id="remembercheck"/><label for="remembercheck">Se souvenir de moi</label>
                    <br>
                    <a href="inscription.php">Vous n'avez pas de compte ? Inscrivez vous ici</a>
                </form>
            </div>
            <a class="nav-link mdi mdi-account-circle" href="#" onclick="searching()"> Se Connecter | S'identifier</a>
        <?php endif; ?>
    </div>
    <div class="col-2 col-sm-1 article">
        <form class="d-flex">
            <button class="btn btn-outline-success" type="submit">Rechercher</button>
        </form>
    </div>
    </div>
</nav>