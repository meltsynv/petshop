<?php include "inc/head.php" ?>
<?php include "inc/nav.php" ?>
    <div class="d-inline-flex p-2 flex-column align-content-end">
        <div class="container">
            <button type="button" name="btnNutzer" onclick="parent.location='adminNutzerliste.php'">Nutzer</button>
            <button type="button" name="btnProdukte" onclick="parent.location='adminProduktübersicht.php'">Produkte
            </button>
        </div>
        <?php include 'canvas.php';?>
    </div>

<?php include "inc/bottom.php";

