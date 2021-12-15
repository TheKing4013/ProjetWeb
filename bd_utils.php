<?php
$user="rick";
$pass="toto";
$dsn="mysql:host=localhost;dbname=databasewebproject";
try {
    $dbh = new PDO($dsn, $user, $pass,
        array(PDO::ATTR_PERSISTENT => true));
}catch(Exception $e)
{
    die('Erreur '.$e->getMessage());
}