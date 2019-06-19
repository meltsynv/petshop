
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Petshop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <span class="navbar-nav">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </span>
    <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
        <ul class="navbar-nav">
            <li>
                <form class="form-inline my-2 my-lg-0" method="post" action="php/searchArticle.php">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="searchLabel" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="userSearch">Search</button>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produktübersichtHund.php">Produktübersicht</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profil.php">Profil</a>
            </li>
        </ul>
    </div>
</nav>
