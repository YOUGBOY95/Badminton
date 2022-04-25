<?php

   $bdd = new PDO('mysql:host=localhost;dbname=badminton;charset=utf8', 'root', 'root');
   $idAdh = $_POST['id'];



   $prenom= $_POST['prenom'];
   $nom = $_POST['nom'];
   $adresse = $_POST['adresse'];
   $ville = $_POST['ville'];
   $cp = $_POST['cp'];
   $niveau = $_POST['niveau'];

   $requete= "UPDATE adherent

             SET nomAdh='".$nom."', prenomAdh='".$prenom."', adresseAdh='".$adresse."', villeAdh='".$ville."', cpAdh='".$cp."', niveauAdh='".$niveau."'

             WHERE matriculeAdh=".$idAdh;

   $requete = $bdd->query($requete); 
   $ligne = $requete->fetch();

   ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Supprimer un Adhérent</title>
    <link rel="stylesheet" href="bootstrap4.css">
</head>
<center>
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

  <h2>Vous avez modifié un adhérent!!!</h2>

  <a href="index.php">Retour vers la page précédente</a>
</center>
</body>
</html>


