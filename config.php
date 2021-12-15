<?php
$user="rick";
$pass="toto";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=databasewebproject', $user, $pass,
        array(PDO::ATTR_PERSISTENT => true));
}catch(Exception $e)
{
    die('Erreur '.$e->getMessage());
}