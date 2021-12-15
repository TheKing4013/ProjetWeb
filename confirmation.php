<?php
require_once "bd_utils.php";
$email = $_GET['email'];
$token = $_GET['token'];

$req = $dbh->prepare('SELECT confirmation_token FROM users WHERE id = ?');
$req->execute([$email]);

$user = $req->fetch();

if($user && $user->confirmation_token == $token){
    die('ok');
} else {
    die('pas ok');
}