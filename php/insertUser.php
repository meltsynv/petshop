<?php
require_once 'login.php';
$connection = new mysqli("Localhost", "root", " ", "petshop");

if ($connection->connect_error){
    die($connection->connect_error);
}

$result = $connection->query($query);
if (!$result){
    die($connection->error);
}

$salt1    = "qm&h*";
$salt2    = "pg!@";

$token    = hash('ripemd128', "$salt1$password$salt2");


function add_user($connection, $fn, $sn, $un, $pw)
{
    $query  = "INSERT INTO users VALUES('$fn', '$sn', '$un', '$pw')";
    $result = $connection->query($query);
    if (!$result) die($connection->error);
}
?>