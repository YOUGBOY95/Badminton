<?php
$bdd = new PDO('mysql:host=localhost;dbname=badminton;charset=utf8', 'root', 'root');
// Définition de la requête SQL
$requete = "SELECT * FROM adherent WHERE matriculeAdh = ".$_GET['id'];
// Exécution de la requête SQL et récupération de ses résultats
$resultat = $bdd->query($requete)->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modifier un adéhrent</title>
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
                <div class="card-header">Modification adhérent n° <?php echo $_GET['id'] ; ?></div>
                <div class="card-body"><form method="post" action="verif.php" onsubmit="return confirm('Etes vous sur?');">
                                                        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                        <div class="form-group">
                            <label for="">Nom:</label>
                            <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $resultat['nomAdh']; ?>"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Prénom:</label>
                            <input type="text" id="prenom" name="prenom" class="form-control" value="<?php echo $resultat['prenomAdh']; ?>"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Adresse:</label>
                            <input type="text" id="adresse" name="adresse" class="form-control" value="<?php echo $resultat['adresseAdh']; ?>"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Ville:</label>
                            <input type="text" id="ville" name="ville" class="form-control" value="<?php echo $resultat['villeAdh']; ?>"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Code Postale:</label>
                            <input type="text" id="cp" name="cp" class="form-control" value="<?php echo $resultat['cpAdh']; ?>"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Niveau:</label>
                            <input type="text" id="niveau" name="niveau" class="form-control" value="<?php echo $resultat['niveauAdh']; ?>"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Type:</label>
                            <input type="text" id="type" name="type" class="form-control" value="<?php echo $resultat['typeAdh']; ?>"><br>
                        </div>
                        <input type="submit" value="Modifié" class="btn btn-success form-control">


                    </form></div>
            </div>
        </div>
    </div>
</div>




</body>
