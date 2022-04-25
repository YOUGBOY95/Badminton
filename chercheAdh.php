<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Recherche d'adhérent</title>
    <link rel="stylesheet" href="bootstrap4.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Badminton Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="gestionAdh.php">Gestion des adhérents </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ajoutAdh.php">Nouveau adhérent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="chercheAdh.php">Rechercher un adhérent<span
                            class="sr-only">(current)</span></a>
            </li>

        </ul>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
        <div class="card">
            <div class="card-header">Rechercher un adhérent</div>
            <div class="card-body">
                <form class="formulaire" action="recup.php" method="post">
                    <div class="form-group">
                    <label for="chercheAdh">Entrez le nom de l'adhérent que vous recherchez:</label>
                    <input type="search" id="chercheAdh" class="form-control" name="q" placeholder="Entrez un nom ..."
                           aria-label="Search through site content" ><br><br>

                    <button class="btn btn-primary" role="submit">Recherche</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>


</body>
</html>