<?php include "inc/head.php"?>
<div class="d-inline-flex p-2 flex-column align-content-end">
    <div>
    <form class="form-inline my-2 my-lg-0" method="post" action="php/searchUser.php">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="searchLabel" id="output" onkeyup="searchq()" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" name="searchBtn" type="submit">Search</button>
    </form>
    </div>
    <div class="container">
        <button type="button" name="btnNutzer" onclick="parent.location='adminNutzerliste.php'">Nutzer</button>
        <button type="button" name="btnProdukte" onclick="parent.location='adminProduktübersicht.php'">Produkte</button>
    </div>
</div>

<?php include "inc/bottom.php";