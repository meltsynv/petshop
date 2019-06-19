<?php
include "../inc/config.php";

if (isset($_POST['logoutBtn'])){
session_start();
$_SESSION = array();
setcookie(session_name(), '', time()-2592000, '/');
session_destroy();

header("location:../index.php");

}
else{
    echo fail;
}
