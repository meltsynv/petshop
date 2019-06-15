<?php include 'inc/head.php'?>
<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" name="searchLabel" placeholder="Search" id="search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<div class="container">
<button type="button" name="btnNutzer" onclick="parent.location='adminNutzerliste.php'">Nutzer</button>
<button type="button" name="btnProdukte" onclick="parent.location='adminProduktübersicht.php'">Produkte</button>
</div>

<script>
    $(function() {

        $( "#search" ).autocomplete(
            {
                source:'searchUser.php',
            })

    });
</script>