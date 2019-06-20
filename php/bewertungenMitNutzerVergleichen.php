<?php
include '../inc/config.php';
if (isset($_POST['commentBtn-nutzer'])){
    $query = 'SELECT bewertungen.User, bewertungen.ID, bewertungen.isBought, kaeufe.Username, kaeufe.ArtikelID
          FROM bewertungen, kaeufe
          WHERE bewertungen.User = kaeufe.Username AND bewertungen.ID = kaeufe.ArtikelID';

    $result = mysqli_query($con, $query);

    if($row = mysqli_fetch_assoc($result)){
        $bewertungen_User = $row['User'];
        $bewertungen_ID = $row['ID'];
        $bewertungen_isBought = $row['isBought'];
        $kaeufe_User = $row['Username'];
        $kaeufe_ArtikelID = $row['ArtikelID'];

        if($bewertungen_User == $kaeufe_User && $bewertungen_ID == $kaeufe_ArtikelID){
            $bewertungen_isBought = 'wurde von Nutzer gekauft';

            $query = "UPDATE bewertungen SET bewertungen.isBought = 'wurde von Nutzer gekauft'";
            $result = mysqli_query($con, $query);
        }
    }
}
