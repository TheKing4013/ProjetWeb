<?php
require_once "bd_utils.php";
$email = $_GET['email'];
$token = $_GET['token'];

$req = $dbh->prepare('SELECT confirmation_token FROM users WHERE email = ?');
$req->execute([$email]);

$user = $req->fetch();

if($user && $user->confirmation_token == $token){
    session_start();
    $dbh->query('');
    $_SESSION['nom'] = $req['nom'];
    $_SESSION['email'] = $req['email'];
    $_SESSION['prenom'] = $req['prenom'];
    header("Location: profil.php");
} else {
    die('pas ok');
}