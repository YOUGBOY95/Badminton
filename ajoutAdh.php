<!DOCTYPE html>
<html>
<head>
	<title>Ajoutez un adéhrent</title>
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
                <a class="nav-link" href="gestionAdh.php">Gestion des adhérents </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ajoutAdh.php">Nouveau adhérent<span
                            class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="chercheAdh.php">Rechercher un adhérent</a>
            </li>

        </ul>
    </div>
</nav>
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <div class="card w-100">
                <div class="card-header">Ajouter un adhérent</div>
                <div class="card-body"><form method="post" action="ajout.php" onsubmit="return confirm('Etes vous sur ?');">
                        <div class="form-group">
                            <label for="">Nom:</label>
                            <input type="text" id="nom" name="nom" class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Prénom:</label>
                            <input type="text" id="prenom" name="prenom" class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Adresse:</label>
                            <input type="text" id="adresse" name="adresse" class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Ville:</label>
                            <input type="text" id="ville" name="ville" class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Code Postale:</label>
                            <input type="text" id="cp" name="cp" class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Niveau:</label>
                            <input type="text" id="niveau" name="niveau" class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Type:</label>
                            <input type="text" id="type"name="type" class="form-control"><br>
                        </div>
                        <input type="submit" value="Ajouter" class="btn btn-success form-control">


                    </form></div>
            </div>
            </div>
        </div>
    </div>



</body>
