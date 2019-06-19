<?php include 'inc/head.php'?>
<?php include 'inc/nav.php'?>
<?php include 'inc/config.php'?>

<div class="container">
    <div class="row text-right">
        <div class="d-md-flex justify-content-around w-100 my-md-3 pl-md-3">
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" id="dog">
                <div class="my-3 py-3">
                    <h2 class="display-5">Austattung für Hunde und Katze</h2>
                    <img src="img/catAndDog.jpg" alt="dog" height="300px" width="400px">
                    <p class="lead">
                        <form method="post" action="produktübersichtHund.php">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="haustiere">ansehen</button>
                        </form>
                    </p>
                </div>
            </div>
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" id="dog">
                <div class="my-3 py-3">
                    <h2 class="display-5">Mein Profil</h2>
                    <img src="img/profil.jpg" alt="cat" height="300px" width="400px">
                    <p class="lead">
                        <form method="post" action="profil.php">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="profil">ansehen</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/bottom.php'?>
