<?php
require_once "bd_utils.php";
require_once "utils.php";

if(empty($_POST)){
    $errors = array();
    if(empty($_POST['email'])){
        $errors['email'] = 'Merci de rentrer un nom';
    } else {
        $req = $dbh->prepare('SELECT email FROM clients WHERE email = ?');
        $req->execute([$_POST['email']]);
        $err_mail = $req->fetch();
        if ($err_mail) {
            $errors['email'] = "Cette adresse mail est déjà utilisée !";
        }
    }
}

if(empty($errors)){
    if($_POST['motDePasse'] != $_POST['motDePasse2']){
        echo "Les deux mots de passes sont différents !";
    } else
        $nom = $_POST['nom'];
    $email = $_POST['email'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $adresse = $_POST['adresse'];
    $tel = $_POST['telephone'];
    $req = $dbh->prepare("INSERT INTO clients SET nom = ?, email = ?, motDePasse = ?, prenom = ?, ville = ?, adresse = ?, telephone = ?, confirmation_token = ?");
    $mdp = password_hash($_POST['motDePasse'], PASSWORD_DEFAULT);
    $token = str_random(60);
    $req->execute([$_POST['nom'], $_POST['email'], $mdp, $_POST['prenom'], $_POST['ville'], $_POST['adresse'], $_POST['telephone'], $token]);
    mail($_POST['email'], "La Friperie | Confirmation de votre Inscription", "Afin de valider votre inscription à notre boutique\nVeuillez cliquer sur le lien ci-dessous:\n http://localhost/ProjetWeb2/confirmation.php?id=".$_POST['email']."&token=$token");
    header('location: index.php');

}

?>

<?php require_once "includes/header.php"?>
<doctype html>
    <html lang="fr">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <head>
        <link rel="stylesheet" href="style.css" />
        <script src="JavaScripts.js"></script>
        <title>Inscription |La Friperie</title>
    </head>

    <body>
    <div align="center">
        <h2>Inscription</h2>
        <?php if(!empty($errors)): ?>
        <div class="alert alert-danger">
            <p>Le formulaire n'a pas été rempli correctement</p>
            <ul>
            <?php foreach ($errors as $error); ?>
                <li><?= $error; ?></li>
            </ul>
        </div>
        <?php endif; ?>
        <br>
        <form method="POST" action="">
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="nom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Prenom</label>
                <input type="text" name="prenom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Ville</label>
                <input type="text" name="ville" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Adresse</label>
                <input type="text" name="adresse" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Numero de téléphone</label>
                <input type="text" name="telephone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Mot de Passe</label>
                <input type="password" name="motDePasse" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Réécrire le mot de passe</label>
                <input type="password" name="motDePasse2" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">M'inscrire</button>
        </form>
    </div>
    </body>

    </html>
