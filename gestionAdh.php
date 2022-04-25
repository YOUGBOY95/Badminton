<?php

$bdd = new PDO('mysql:host=localhost;dbname=badminton;charset=utf8', 'root', 'root');
// Définition de la requête SQL
$requete = "SELECT nomAdh, prenomAdh, niveauAdh, matriculeAdh FROM adherent ORDER BY nomAdh";
// Exécution de la requête SQL et récupération de ses résultats
$resultat = $bdd->query($requete);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Adherents</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap4.css">
</head>
<body>
<center>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Badminton Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="gestionAdh.php">Gestion des adhérents <span
                                class="sr-only">(current)</span></a>
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


    <table class="table">
        <tr>
            <th>Actions</th>
            <th>Nom de l'adhérent</th>
            <th>Prénom de l'adhérent</th>
            <th>Niveau de l'adhérent</th>
        </tr>


        <?php

        $donnees = $resultat->fetchAll();
        foreach ($donnees as $ligne) {
            $nom = $ligne['nomAdh'];
            $prenom = $ligne['prenomAdh'];
            $niveau = $ligne['niveauAdh'];
            echo '<tr>
<td> 	 
<a href="details.php?id=' . $ligne['matriculeAdh'] . '"' . '>Détails</a> |
<a href="modif.php?id=' . $ligne['matriculeAdh'] . '"' . '>Modifier</a> |
<a href="supp.php?id=' . $ligne['matriculeAdh'] . '"' . '>Supprimer</a>
</td>
<td>' . $nom . '</td>
<td>' . $prenom . '</td>
<td>' . $niveau . '</td>
</tr>';
        }
        ?>


    </table>
    <br><br><br>
    <a href="index.php">Retour vers la page précédente</a>
</center>
</body>
</html>	