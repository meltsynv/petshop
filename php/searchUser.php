<?php
$req = "SELECT Vorname FROM user WHERE Vorname LIKE '%".$_REQUEST['term']."%' ";
$query = mysqli_query($con,$req);

if (isset($_POST['search'])){
    $Name = $_POST['search'];
}
while($row = mysqli_fetch_array($query)) {
    $results[] = array('label' => $row['Vorname']);
}

echo json_encode($results);