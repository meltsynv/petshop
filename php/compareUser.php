<?php
include '../inc/config.php';

if (isset($_POST['loginBtn'])){
    $email = $_POST['Email'];
    $password = $_POST['Passwort'];

    $query  = "SELECT Email, Passwort FROM user";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_assoc($result)) {
       if ($password == $row[1] && $row[0]==$email){
            header("location:../index.php");
        }
        else{
            echo "fail";        }

    }

}
else{
    echo "fail";
}
