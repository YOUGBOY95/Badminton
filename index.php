<!DOCTYPE html>
<html>
<head>
    <title>Projet Badminton</title>
    <meta charset="utf-8">
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
                <a class="nav-link" href="gestionAdh.php">Gestion des adhérents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ajoutAdh.php">Nouveau adhérent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="chercheAdh.php">Rechercher un adhérent</a>
            </li>

        </ul>
    </div>
</nav>

<main>
    <div class="container">
        <div class="row text-center">
            <h1>Bienvenue dans votre ligue de Badminton</h1>
        </div>
        <div class="row justify-content-center">
            <div class="card w-100">
                <div class="card-header">Entreprendre une action</div>
                <div class="card-body text-center">
                    <div class="btn-group">
                        <a class="btn btn-primary" href="gestionAdh.php">Gérer les adhérents <span class="sr-only">(current)</span></a>

                        <a class="btn btn-secondary" href="ajoutAdh.php">Nouveau adhérent</a>

                        <a class="btn btn-dark" href="chercheAdh.php">Rechercher un adhérent</a>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class="row text-center">
            <h5>Vous êtes sur le site officiel de la ligue de Badminton du Grand Est.<br>
                Vous avez la possibilité de voir touts les adhérents de la ligue, les modifier, les supprimer, rechercher par nom ou en rajouter.
                Bonne journée!!
                </h5>
        </div>
    </div>
</main>
</body>
</html>